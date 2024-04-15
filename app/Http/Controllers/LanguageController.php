<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
 public function index(){
 	$language = Language::where('is_deleted',0)->get();
 	return view('superadmin.language.index')->with(["language"=>$language]);
 }
 public function store(Request $request){

        $store = new Language();
      
        $store->language = $request->language;
        $store->save();
       
        return redirect()->route('language')->withSuccess( 'language has been store successfully' );;
 }
}