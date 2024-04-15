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
 public function status($id,$code){
        $language = Language::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('language')->withSuccess( 'Language Status Changed..' );
    }

    public function edit($id){
        $language = Language::find($id);

        return response()->json($language);
    }

    public function update(Request $request){
       
        $update = Language::find($request->id);
        $update->language = $request->language;
        $update->update();
        return redirect()->route('language')->withSuccess( 'Language has been updated successfully' );
    }

    public function delete($id){
        $delete = Language::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('language')->with('message','Language has been deleted successfully');

    }
}