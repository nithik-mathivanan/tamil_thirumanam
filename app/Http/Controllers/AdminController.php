<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request){
      return view('admin.auth.login');  //
    }

    public function auth(Request $request)
    {
       if(Auth::guard('admin')->attempt($request->only(['email','password']))){
             return view('admin/dashboard');
        }  
        else{
            return redirect()->back()->with('error','Invalid Credentials');
        } 
      // $email=$request->post('email');
      // $password=$request->post('password');

      // $result=Admin::where(['email'=>$email,'password'=>$password])->get();
      // //$result=Admin::where(['email'=>$email])->first();
      // if(isset($result['0']->id))
      // {
        
      //   $request->session()->put('ADMIN_LOGIN',true);
      //   $request->session()->put('ADMIN_ID',$result['0']->id);
      //   return view('admin/dashboard');
      //   }
      //   else
      //   {
      //     $request->session()->flash('error','Please enter the valid details');
      //   return redirect('admin');

      //   }
      
      
    }

  public function dashboard(){

    return view('superadmin.dashboard');
  }

    
}
