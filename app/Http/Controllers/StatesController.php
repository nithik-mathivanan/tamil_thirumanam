<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\States;


class StatesController extends Controller
{
    public function index(){
        $states = States::where('is_deleted',0)->get();
        return view('superadmin.states.index')->with(['states'=>$states]);
    }

    public function status($id,$code){
        $states = States::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('states')->withSuccess( 'States Status Changed..' );
    }
}
