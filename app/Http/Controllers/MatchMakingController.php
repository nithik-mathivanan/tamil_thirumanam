<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\MatchMaking\Users;
use App\Models\User;
use App\Models\Users\Profile;
use App\Models\Users\MatchMaking;
use App\Models\Interest;
use App\Models\Community;
use App\Models\Education;
use App\Models\Eatinghabbit;
use App\Models\Jobtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Auth;

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
          $education = Education::where('is_deleted',0)->where('status',0)->get();
          $jobtype = Jobtype::where('is_deleted',0)->where('status',0)->get();
          $eatinghabbit = Eatinghabbit::where('is_deleted',0)->where('status',0)->get();
          $profiles = $this->getProfileByUser(Auth::user()->id);

          $community = Community::where('religion',$profiles->religion)->where('status',0)->where('is_deleted',0)->get();

                  // dd($community);
        return view('users.match_making', $result)->with(['jobtype'=>$jobtype,'education'=>$education,'community'=>$community,'eatinghabbit'=>$eatinghabbit, 'profiles'=>$profiles]);
    }


      public function manage_match_making(Request $request){

        $valid=Validator::make($request->all(),[
        "mcaste"=>'required',
        // "mcustomer_id"=>'required|unique:match_details',
        "msubcaste"=>'required',
        "meducation"=>'required',
        ]);

           
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

        $user = User::where('id',Auth::user()->id)->update(['status'=>2]); 
        $query=DB::table('match_details')->insert($arr);
        $request->session()->flash('message','Your ID Verified.Please Login');
     
        return redirect('user');
    
    }

    public function matching_profiles(){

        if($this->getProfileByUser(Auth::user()->id)->gender=='Male'){
            $match = Profile::with('getUser','getImages')->where('caste',$this->getPrefferenceByCustomeId(Auth::user()->rand_id)->mcaste)->where('gender','Female')->get();
        }
        else{
            $match = Profile::with('getUser','getImages')->where('caste',$this->getPrefferenceByCustomeId(Auth::user()->rand_id)->mcaste)->where('gender','Male')->get();
        }
       
        return view('users.matching_profiles')->with(['match'=>$match]);
    }
   
   public function profile_interests(Request $request){
    $result['userdetail']=DB::table('users')->where(['id'=>$request->session()->get('USERS_ID')])->where(['status'=>1])->get();
    $result['profile']=DB::table('users')
    ->leftJoin('profiles','profiles.customer_id','=','users.rand_id')
    ->leftJoin('profile_images','profile_images.pcustomer_id','=','users.rand_id')
    ->where(['users.id'=>$request->session()->get('USERS_ID')])
    ->where(['users.status'=>1])
    ->get();

    $interest = Interest::with('getUser','getProfile','getUserImg')->where('interest_on',Auth::user()->id)->where('status','!=',1)->get();
    return view('users.profile_interests',$result)->with(['interest'=>$interest]);
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

   public function profile_detail_view($id){
    
     $profile = Profile::with('getImages','getUser','getReligion')->where('user_id',$id)->first();
     $interest_status = 0;

     $send_status = Interest::where('user_id',Auth::user()->id)->where('interest_on',$id)->whereIn('status',[0,2])->first();
     if($send_status){
        $interest_status='send';
     }
      $recieve_status = Interest::where('interest_on',Auth::user()->id)->where('user_id',$id)->whereIn('status',[0,2])->first();
     if($recieve_status){
         $interest_status='recieved';
     }


    return view('users.profile_detail_view')->with('profile',$profile)->with('interest_status',$interest_status);
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

   public function sendInterest($user_id){
     
      $store = new Interest();
      $store->user_id= Auth::user()->id;
      $store->interest_on = $user_id;
      $store->save();

      return redirect()->back()->with('success','Your Interst has been send successfully');
   }
    public function acceptInterest($id){
     
      $store = Interest::find($id);
      $store->status= 2;
      $store->update();

      return redirect()->back()->with('success','Your Interst has been accepted ');
   }

   public function denyInterest($id){
     
    $store = Interest::find($id);
    $store->status= 3;
    $store->update();

      return redirect()->back()->with('success','Your Interst has been Rejected');
   }

  
}
