<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Religion;

class RelegionController extends Controller
{
   
    public function index(){
    	$religion = Religion::where('is_deleted',0)->get();
        return view('superadmin.religion.index')->with(["religion"=>$religion]);
    }

    public function create(){
        return view('superadmin.religion.create');
    }
    public function store(Request $request){

          $store_religion = new Religion();
          $store_religion->religion = $request->religion;
          $store_religion->save();

        return  redirect()->route('religion')->with('message','Religion has been stored successfully');

    }
    public function edit($id){
    	$religion = Religion::where('id',$id)->first();
    	return view('superadmin.religion.edit')->with(["religion"=>$religion]);
    }
    public function update(Request $request){
    	 $store_religion = Religion::where('id',$request->id)->first();
          $store_religion->religion = $request->religion;
          $store_religion->update();

        return  redirect()->route('religion')->with('message','Religion has been updated successfully');

    }
    public function delete($id){
    	$delete = Religion::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('religion')->with('message','Religion has been deleted successfully');

    }
     public function active($id){
     $menu = Religion::where('id',$id)->first();
     $menu->status = 1;
     $menu->update();
     return redirect()->route('religion')->with('message','Religion has been Activated successfully');
   }
   public function inactive($id){
    $menu = Religion::where('id',$id)->first();
    $menu->status = 0;
    
    $menu->update();
    return redirect()->route('religion')->with('message','Religion has been DeActive successfully');

   }
}
