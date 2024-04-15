<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Profile\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Storage;

error_reporting(0);

class ProfileController extends Controller
{
    
    public function profile_details(Request $request ,$id)
    {
        // $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['data']=DB::table('users')
          ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
          ->where(['users.status'=>1])
          ->where(['rand_id'=>$id])->get();
        return view('users.profile_details', $result);
    }

    public function manage_profile_details(Request $request)
    
    {

        
     $arr=[

            "fullname"=>$request->fullname,
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
            "city"=>$request->city,
            "pincode"=>$request->pincode,
            "instagram"=>$request->insta,
            "facebook"=>$request->facebook,
            "youtube"=>$request->youtube,
            "linkedln"=>$request->linkedln,
            "eatinghabit"=>$request->eating,
            "drinkshabit"=>$request->drinking,
            "smokinghabit"=>$request->smoking,
            "hobbies"=>$request->hobbies,
            "status"=>1,
            "created_at"=>date('Y-m-d h:i:s'),
            "updated_on"=>date('Y-m-d h:i:s')
        ];
        

        if(DB::table('profiles')->where(['customer_id'=>$request->pid])->exists())
        {
            $query=DB::table('profiles')->where(['customer_id'=>$request->pid])->update($arr);
           // return redirect('user/preferred_details/'.$request->pid);   
                        return redirect('user/profile_view');  
            $request->session()->flash('message','Congratulations!!! Profile Updated');
           
        }
        else
        {
            $query=DB::table('profiles')->insert($arr);
            return redirect('user/verification/'.$request->pid);
        }

     
     $request->session()->flash('message','Your Signup was Verified.');
     
    }
    

public function preferred_details(Request $request ,$id)
    {
        $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

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
        
        if(DB::table('profile_images')->where(['pcustomer_id'=>$request->pcustomer_id])->exists())
        {
            if(session()->has('USERS_ID'))
            {
            $result=DB::table('profile_images')->where(['pcustomer_id'=>$request->pcustomer_id])->update([
            'images'=>$image_name
            ]);    
            return redirect('user/dashboard');
            }
            else
            {
                return redirect('user/preferred_details/'.$request->pcustomer_id);
            }
            
        }
        else
        {
            $result=DB::table('profile_images')->insert([
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
