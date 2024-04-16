<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;

class CitiesController extends Controller
{
    public function index(){
        $cities = Cities::where('is_deleted',0)->get();
       
        return view('superadmin.cities.index')->with(['cities'=>$cities]);
    }

    public function status($id,$code){
        $cities = Cities::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('cities')->withSuccess( 'Cities Status Changed..' );
    }
}

