<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;


class CountriesController extends Controller
{
    public function index(){
        $countries = Countries::where('is_deleted',0)->get();
        return view('superadmin.countries.index')->with(['countries'=>$countries]);
    }

    public function status($id,$code){
        $countries = Countries::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('countries')->withSuccess( 'Countries Status Changed..' );
    }
}