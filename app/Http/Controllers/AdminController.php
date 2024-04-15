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
      return view('superadmin.auth.login');  //
    }

    public function auth(Request $request)
    {
       if(Auth::guard('admin')->attempt($request->only(['email','password']))){
             return redirect()->route('admin-dashboard');
        }  
        else{
            return redirect()->back()->with('error','Invalid Credentials');
        } 

    }

  public function dashboard(){

    return view('superadmin.dashboard');
  }

  public function signout(){
     Auth::guard('admin')->logout();

     return redirect('admin');
  }

    
}
