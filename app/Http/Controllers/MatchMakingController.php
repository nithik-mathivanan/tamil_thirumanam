<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\MatchMaking\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

error_reporting(0);

class MatchMakingController extends Controller
{
    
    public function match_making(Request $request, $id)
    {
        $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();
        
        $result['data']=DB::table('users')
          ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
          ->where(['users.status'=>1])
          ->where(['users.rand_id'=>$id])->get();
        return view('users.match_making', $result);
    }


      public function manage_match_making(Request $request)
        {
        $valid=Validator::make($request->all(),[
        "mcaste"=>'required',
        // "mcustomer_id"=>'required|unique:match_details',
        "msubcaste"=>'required',
        "meducation"=>'required',
        ]);
     
     if(!$valid->passes()){
        $request->session()->flash('message','Already Added Data. Please Login and Update');
        //return redirect('user/signup');
        }
        else
        {
          
         $arr=[
            "mgender"=>$request->mgender,
            "mcustomer_id"=>$request->paaid,
            "mcaste"=>$request->mcaste,
            "msubcaste"=>$request->msubcaste,
            "mgotharam"=>$request->mgotharam,
            "mdosham"=>$request->mdosham,
            "meducation"=>$request->meducation,
            "mage"=>$request->mage,
            "mjob"=>$request->mjob,
            "msalary"=>$request->msalary,
            "mhabits"=>$request->meating,
            "mdrinks"=>$request->mdrinking,
            "msmoking"=>$request->msmoking,
            "mhobbies"=>$request->mhobbies,
            "mstar"=>$request->mstar,
            "mraasi"=>$request->mraasi,
            "status"=>1,
            "created_at"=>date('Y-m-d h:i:s'),
            "updated_on"=>date('Y-m-d h:i:s')
            
        ];

        
     $query=DB::table('match_details')->insert($arr);
     $request->session()->flash('message','Your ID Verified.');
     //return redirect('user/verification/'.$request->paaid);
     return redirect('user/signup');
    }
    }

    public function matching_profiles(Request $request)
    {
      $sort="";
      $location="";
      $view_category="";
      $check1="";
      $check2="";
      $check3="";
      $check4="";
      $radio1="";
      $radio2="";
      $job_hour1="";
      $job_hour2="";
      $job_hour3="";
      $job_hour4="";
      $job_hour5="";
      $is_selected1="";
      $is_selected2="";
      $is_selected3="";
      $is_selected4="";
      $is_radiochecked1="";
      $is_radiochecked2="";
      $is_job_selected1="";
      $is_job_selected2="";
      $is_job_selected3="";
      $is_job_selected4="";
        $result['userdetail']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('match_details','match_details.mcustomer_id','=','profiles.customer_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])->where(['users.status'=>1])->get();


        $result['matching_profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','profiles.customer_id')
        ->leftJoin('match_details','match_details.mcustomer_id','=','profile_images.pcustomer_id')
        ->distinct()->select('users.id','profiles.fullname','profiles.gender','profiles.age','profiles.height','profiles.job_type','profiles.education','profile_images.images','match_details.mgender','profiles.id as pid','profiles.caste','profiles.city','profiles.district')
        ->where(['users.status'=>1])
        ->get();
        

        return view('users.matching_profiles',$result);
    }
   
   public function profile_interests(Request $request)
   {
    $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])
        ->where(['users.status'=>1])
        ->get();

    return view('users.profile_interests',$result);
   }

   public function profile_plan(Request $request)
   {
    $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])
        ->where(['users.status'=>1])
        ->get();

    return view('users.profile_plan',$result);
   }

   public function chat_lists(Request $request)
   {
    $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])
        ->where(['users.status'=>1])
        ->get();

    return view('users.chat_lists',$result);
   }

   public function profile_setting(Request $request)
   {
    $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])
        ->where(['users.status'=>1])
        ->get();

    return view('users.profile_setting',$result);
   }

   public function profile_detail_view(Request $request)
   {
     $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();

        $result['profile']=DB::table('users')
        ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
        ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
        ->where(['users.id'=>$request->session()->get('USERS_ID')])
        ->where(['users.status'=>1])
        ->get();

    return view('users.profile_detail_view',$result);
   }

   public function expressinterests(Request $request, $id)
   {
    $users_id=DB::table('users')->where(['id'=>$request->session()->has('USERS_ID')])->where(['status'=>1])->select('rand_id')->get();
    $profile_id=DB::table('users')->where(['id'=>$id])->where(['status'=>1])->select('rand_id')->get();

    $arr = [
        "viewers_id"=>$users_id,
        "interest_id"=>$profile_id,
        "express"=>0,
        "created_at"=>date('Y-m-d h:i:s')
    ];

    $query=DB::table('interests')->insert($arr);
    return redirect('user/match_making/'.$users_id);
   }
}
