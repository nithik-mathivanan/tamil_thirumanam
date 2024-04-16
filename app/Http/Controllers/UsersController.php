<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
use App\Http\Controllers\Controller;
use App\Models\Users\Users;
use App\Models\Profile;
use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Users\UserOtp;

class UsersController extends Controller
{
   
    public function index(Request $request)
    {
        if($request->session()->has('USERS_LOGIN')){
        return redirect('user/dashboard');
      }
      else
      {
        return view('users.login');
      }
        return view('users.login');
    }

   public function signup()
   {
    $profile = Profile::where('is_deleted',0)->where('status',0)->get();
    $country_code = Countries::get();
   
    return view('users.signup')->with(['profile'=>$profile,'country_code'=>$country_code]);
   }

   public function signup_process(Request $request)
   {
     $valid=Validator::make($request->all(),[
        "name"=>'required',
        "email"=>'required|unique:users,email',
        "password"=>'required',
        "phone"=>'required|numeric|digits:10',
        "country_code"=>'required',
    ]);
     
     if(!$valid->passes()){
        $request->session()->flash('message','You Already Registered. Please Try to Login');
        return redirect('user/signup');
    }
    else
    {

    $year = date('Y');
    $month = date('m');
    $prefix = 'VT';

   /* for ($counter=9999; $counter >= 1001; $counter--)
    {
        $rand_id = $prefix.$year.$month.str_pad($counter, 4, '0', STR_PAD_LEFT);
    }
    */
     $rand_id = $prefix.$year.$month.'_'.rand(1000,9999);
    $profile_by=$request->profile_by;
    
     $arr=[
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "mprofile_for"=>$request->mprofile_by,
            "phone"=>$request->phone,
            "country_code"=>$request->country_code,
            "status"=>1,
            "is_verify"=>1,
            "rand_id"=>$rand_id,
            "created_at"=>date('Y-m-d h:i:s'),
            "updated_at"=>date('Y-m-d h:i:s')

        ];

        
        $query=DB::table('users')->insert($arr);
        
    
     return redirect()->route('user-login');
    }
     
     
   }
   

    public function dashboard(Request $request)
    {
       
    
        if(Auth::user()->status==1){
            
            return redirect('user/profile_details/'.Auth::user()->rand_id);
        }
        $result['userdetail']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('match_details','match_details.mcustomer_id','=','profiles.customer_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])->where(['users.status'=>1])->get();

        $result['profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])
        ->where(['users.status'=>1])
        ->get();

        $result['matching_profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','profiles.customer_id')
        ->leftJoin('match_details','match_details.mcustomer_id','=','profile_images.pcustomer_id')
        ->distinct()->select('users.id','profiles.fullname','profiles.gender','profiles.age','profiles.height','profiles.job_type','profiles.education','profile_images.images','match_details.mgender','profiles.id as pid','profiles.caste','profiles.city','profiles.district')
        ->where(['users.status'=>1])
        ->get();

        return view('users.dashboard',$result);
    }
    public function profile_view(Request $request)
    {
        $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])
        ->where(['users.status'=>1])
        ->get();
        //  echo "<pre>";
        // print_r($result);
        // die();

        return view('users.profile_view',$result);
    }

    public function verification(Request $request, $id)
    {
        $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['data']=DB::table('users')
          ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
          ->where(['users.status'=>1])
          ->where(['rand_id'=>$id])->get();
   
        return view('users.verification', $result);
    }



    public function plan_details(Request $request, $id)
    {
        $result['userdetail']=DB::table('users')->where(['rand_id'=>$id])->where(['status'=>1])->get();
        if($result['userdetail']['0']->id)
        {
            DB::table('users')->where(['id'=>$result['userdetail']['0']->id])->update(['is_verify'=>1]);
        }


        return view('users.plan_details',$result);
    }

    public function about_self(Request $request, $id)
    {
        $result['userdetail']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('match_details','match_details.mcustomer_id','=','profiles.customer_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])->where(['users.status'=>1])->get();

        $result['data']=DB::table('users')->where(['rand_id'=>$id])->where(['status'=>1])->get();

        $result['help']=DB::table('profiles')
        ->leftJoin('users','users.rand_id','=','profiles.customer_id')
        ->where(['users.rand_id'=>$id])->get();

        $gen=$result['help'][0]->gender;
        $prof=$result['help'][0]->mprofile_for;
        

        $relations=relations($gen, $prof);
       
        $self=selfs($gen);
    
        $result['real']=$relations;
        
        //pass to js
        $rel=$relations;
        $sel=$self;
        $edu=$result['help'][0]->education;
        $occ=$result['help'][0]->joboccu;
        $fstat=$result['help'][0]->family_status;
        $ftype=$result['help'][0]->family_type;
        $fval=$result['help'][0]->family_values;
        $city=$result['help'][0]->city;

        
        return view('users.about_self',compact('rel','sel','edu','occ','fstat','ftype','fval','city'),$result);
    }

    public function manage_about_self(Request $request)
    {
        $arr = [
            "about_self"=>$request->userData
        ];

        if($arr!=null)
        {
            DB::table('profile_images')->where(['pcustomer_id'=>$request->self_id])->update($arr);
             $request->session()->flash('message','Awesome!!!. Your Profile is Created. Just Login and Find Partner');
            return redirect('user');
           
        }
        else
        {
            return redirect('user/about_self'.$request->self_id);
        }

        return redirect('user/about_self'.$request->self_id);

    }
}
