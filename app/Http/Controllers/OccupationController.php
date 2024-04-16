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
 public function status($id,$code){
        $occupation = Occupation::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('occupation')->withSuccess( 'Occupation Status Changed..' );
    }

    public function edit($id){
        $occupation = Occupation::find($id);

        return response()->json($occupation);
    }

    public function update(Request $request){
       
        $update = Occupation::find($request->id);
        $update->occupation = $request->occupation;
        $update->update();
        return redirect()->route('occupation')->withSuccess( 'Occupation has been updated successfully' );
    }

    public function delete($id){
        $delete = Occupation::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('occupation')->with('message','Occupation has been deleted successfully');

    }
}