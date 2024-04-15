<?php

/* For testing laravel Api generation and given to mb app developer the token, this file was created and tested via postman on MAR 17/3/24 5pm 

https://medium.com/@abdelra7manabdullah/api-authentication-using-laravel-sanctum-v10-x-21dfe130cda
https://laravel.com/docs/11.x/hashing
https://web.postman.co/workspace/My-Workspace~36931439-c642-4ee8-84de-7ea80ab51b4a/request/create?requestId=ce698bfd-623b-41ed-b878-3e701e4a20f7
*/
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller{


public function register(Request $request){
    
    
     $year = date('Y');
    $month = date('m');
    $prefix = 'VT';

   /* for ($counter=9999; $counter >= 1001; $counter--)
    {
        $rand_id = $prefix.$year.$month.str_pad($counter, 4, '0', STR_PAD_LEFT);
    }
    */
     $rand_id = $prefix.$year.$month.'_'.rand(1000,9999);
     
    $registerUserData = $request->validate([
        'name'=>'required|string',
        'email'=>'required|string|email|unique:users',
        'password'=>'required|min:8',
        'phone'=> 'required|min:10',
        'is_verify' => 'required',
        'status' => 'required',
        'mprofile_for' => 'required'
    ]);
    $user = User::create([
        'name' => $registerUserData['name'],
        'email' => $registerUserData['email'],
        'phone' => $registerUserData['phone'],
        'is_verify' => $registerUserData['is_verify'],
        'status' => $registerUserData['status'],
        'password' => Hash::make($registerUserData['password']),
        'mprofile_for' => $registerUserData['mprofile_for'],
        'rand_id' => $rand_id
    ]);
    return response()->json([
        'message' => 'User Created ',
    ]);
}



public function login(Request $request){
        $loginUserData = $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|min:8'
        ]);
        $user = User::where('email',$loginUserData['email'])->first();
        if(!$user || !Hash::check($loginUserData['password'],$user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        }
        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
        return response()->json([
            'access_token' => $token,
        ]);
}


public function logout(){
    auth()->user()->tokens()->delete();

    return response()->json([
      "message"=>"logged out"
    ]);
}

}