<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Occupation;

class OccupationController extends Controller
{
 public function index(){
 	$occupation = Occupation::where('is_deleted',0)->get();
 	return view('superadmin.occupation.index')->with(["occupation"=>$occupation]);
 }
 public function store(Request $request){

        $store = new Occupation();
      
        $store->occupation = $request->occupation;
        $store->save();
       
        return redirect()->route('occupation')->withSuccess( 'Occupation has been store successfully' );;
 }
}