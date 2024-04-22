<?php

namespace App\Http\Controllers;
use App\Models\Interest;
use Illuminate\Http\Request;
use Session;

class InterestController extends Controller
{
    public function index(){
        $interest = Interest::with('getUser','getProfile','getUserImg','interestOn')->get();
       

        return view('superadmin.interest.index')->with(['interest'=>$interest]);
    }

    public function view($id){

        $interest = Interest::with('getUser','getProfile','getUserImg','interestOn','TogetUserImg')->where('id',$id)->first();
        return view('superadmin.interest.view')->with(['interest'=>$interest]);
    }
}