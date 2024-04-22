<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Religion;
use App\Models\Language;
use App\Models\Jobtype;
use App\Models\States;
use App\Models\Familystatus;
use App\Models\Community;
use App\Models\Cities;
use App\Models\Familytype;
use App\Models\Familyvalue;
use App\Models\Parentalstatus;
use App\Models\Eatinghabbit;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Storage;
use Auth;

error_reporting(0);

class UserProfileController extends Controller
{
    
    public function profile_details(Request $request ,$id){
    
    $result['data']=DB::table('users')
          ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
          ->where(['users.status'=>1])
          ->where(['rand_id'=>$id])->get();
    $community = Community::where('status',0)->where('is_deleted',0)->get();
    $religion = Religion::where('status',0)->where('is_deleted',0)->get();

    $jobtype = Jobtype::where('status',0)->where('is_deleted',0)->get();
    $education = Education::where('status',0)->where('is_deleted',0)->get();
    $familystatus = Familystatus::where('status',0)->where('is_deleted',0)->get();
    $familytype = Familytype::where('status',0)->where('is_deleted',0)->get();
    $familyvalue = Familyvalue::where('status',0)->where('is_deleted',0)->get();
    $parentalstatus = Parentalstatus::where('status',0)->where('is_deleted',0)->get();
    $eatinghabbit = Eatinghabbit::where('status',0)->where('is_deleted',0)->get();
    $language = Language::where('status',0)->where('is_deleted',0)->get();
    $state = States::where('country_id',101)->where('status',0)->where('is_deleted',0)->get();
        



        return view('users.profile_details',$result)->with(['religion'=>$religion,'jobtype'=>$jobtype,'education'=>$education,'familystatus'=>$familystatus,'familytype'=>$familytype,'familyvalue'=>$familyvalue,'parentalstatus'=>$parentalstatus,'eatinghabbit'=>$eatinghabbit,'language'=>$language,'community'=>$community,'state'=>$state]);
    }

    function editprofile_details($id){
        $result['data']=DB::table('users')
          ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
          ->where(['users.status'=>2])
          ->where(['rand_id'=>$id])->get();
        
          $state_id = States::where('name',$result['data'][0]->state)->first()->id;
           
        $community = Community::where('status',0)->where('is_deleted',0)->get();
        $religion = Religion::where('status',0)->where('is_deleted',0)->get();
        $jobtype = Jobtype::where('status',0)->where('is_deleted',0)->get();
        $education = Education::where('status',0)->where('is_deleted',0)->get();
        $familystatus = Familystatus::where('status',0)->where('is_deleted',0)->get();
        $familytype = Familytype::where('status',0)->where('is_deleted',0)->get();
        $familyvalue = Familyvalue::where('status',0)->where('is_deleted',0)->get();
        $parentalstatus = Parentalstatus::where('status',0)->where('is_deleted',0)->get();
        $eatinghabbit = Eatinghabbit::where('status',0)->where('is_deleted',0)->get();
        $language = Language::where('status',0)->where('is_deleted',0)->get();
        $state = States::where('country_id',101)->where('status',0)->where('is_deleted',0)->get();
        $district = Cities::where('state_id',$state_id)->where('status',0)->where('is_deleted',0)->get();

        return view('users.edit_profile_details',$result)->with(['religion'=>$religion,'jobtype'=>$jobtype,'education'=>$education,'familystatus'=>$familystatus,'familytype'=>$familytype,'familyvalue'=>$familyvalue,'parentalstatus'=>$parentalstatus,'eatinghabbit'=>$eatinghabbit,'language'=>$language,'community'=>$community,'state'=>$state,'district'=>$district]);
    }

    public function manage_profile_details(Request $request){
       
        $arr=[
            "fullname"=>$request->fullname,
            "user_id"=>Auth::user()->id,
            "customer_id"=>$request->pid,
            "dob"=>$request->dob,
            "age"=>$request->age,
            "gender"=>$request->gender,
            "height"=>$request->height,
            "weight"=>$request->weight,
            "bmi"=>$request->bmi,
            "maritalstatus"=>$request->martial_status,
            "religion"=>$request->religion,
            "mothertongue"=>$request->mother_tongue,
            "caste"=>$request->caste,
            "subcaste"=>$request->subcaste,
            "gotharam"=>$request->gotharam,
            "dosham"=>$request->dosham,
            "if_dosham"=>$request->dosham_type,
            "star"=>$request->star,
            "rasi"=>$request->raasi,
            "job_type"=>$request->jobtype,
            "company_name"=>$request->companyname,
            "salary"=>$request->salary,
            "joboccu"=>$request->joboccu,
            "education"=>$request->education,
            "family_status"=>$request->family_status,
            "family_type"=>$request->family_type,
            "family_values"=>$request->family_value,
            "disability"=>$request->physically_abled,
            "father_name"=>$request->fname,
            "mother_name"=>$request->mname,
            "f_status"=>$request->father_status,
            "m_status"=>$request->mother_status,
            "brothers"=>$request->brothers,
            "sisters"=>$request->sisters,
            "bmarried"=>$request->bmarried,
            "smarried"=>$request->smarried,
            "state"=>$request->state,
            "district"=>$request->district,
            "city"=>$request->district,
            "pincode"=>$request->pincode,
            "instagram"=>$request->insta,
            "facebook"=>$request->facebook,
            "youtube"=>$request->youtube,
            "linkedln"=>$request->linkedln,
            "eatinghabit"=>$request->eating,
            "drinkshabit"=>$request->drinking,
            "smokinghabit"=>$request->smoking,
            // "hobbies"=>implode(',', $request->hobbies),
            "status"=>2,
            "created_at"=>date('Y-m-d h:i:s'),
            "updated_on"=>date('Y-m-d h:i:s')
        ];

        if(DB::table('profiles')->where(['customer_id'=>$request->pid])->exists()){
            $query=DB::table('profiles')->where(['customer_id'=>$request->pid])->update($arr);
            return redirect('user/profile_view');  
            $request->session()->flash('message','Congratulations!!! Profile Updated');
           
        }
        else
        {
            $query=DB::table('profiles')->insert($arr);
            return redirect('user/preferred_details/'.$request->pid)->with('success','Upload Your Photos!!!');
        }

     
     $request->session()->flash('message','Your Signup was Verified.');
     
   
     
    }
    

public function preferred_details(Request $request ,$id)
    {
        $result['userdetail']=DB::table('users')->where(['id'=>Auth::user()->id])->where(['status'=>1])->get();

        $result['data']=DB::table('users')
          ->where(['status'=>1])
          ->where(['rand_id'=>$id])->get();
        return view('users.preferred_details', $result);
    }

public function manage_preferred_details(Request $request)
    {
     
       
       if($request->hasfile('images')) {
        foreach($request->file('images') as $file)
        {
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/images/uploads/', $name);  
            $imgData[] = $name;  
        }
        $image_name=json_encode($imgData);
        $image_exsist = DB::table('profile_images')->where(['pcustomer_id'=>$request->pcustomer_id])->first();
        if($image_exsist)
        {

            $res = str_replace( array( '[', ']',),'', $image_exsist->images);
            $res2 = str_replace( array( '[', ']',),'', $image_name);
           $image_name = '['.$res.','.$res2.']';
            $result=DB::table('profile_images')->where(['pcustomer_id'=>$request->pcustomer_id])->update([
            'images'=>$image_name
            ]);  
           
            return redirect('user/dashboard');
            
            
        }
        else
        {
            $result=DB::table('profile_images')->insert([
            "user_id"=>Auth::user()->id,
            'pcustomer_id'=>$request->pcustomer_id,
            'images'=>$image_name
            ]);
        }
        
       }
        if($result!=null)
        {
            $request->session()->flash('message','Your Image was Uploaded.');
            return redirect('user/match_making/'.$request->pcustomer_id);
        }

        else
        {
            $request->session()->flash('message','Check your image type.');
            return redirect('user/preferred_details/'.$request->pcustomer_id);
        }
        
    }
    
}
