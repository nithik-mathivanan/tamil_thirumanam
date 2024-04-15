<?php

namespace App\Http\Controllers;
use App\Models\Familyvalue;
use Illuminate\Http\Request;
use Session;

class FamilyvalueController extends Controller
{
    public function index(){
        $familyvalue = Familyvalue::where('is_deleted',0)->get();
        return view('superadmin.familyvalue.index')->with(['familyvalue'=>$familyvalue]);
    }

    public function store(Request $request){
       
        $store = new Familyvalue();
        $store->familyvalue = $request->familyvalue;
        $store->save();
       
        return redirect()->route('familyvalue')->withSuccess( 'Familyvalue has been store successfully' );
    }

    public function status($id,$code){
        $familyvalue = Familyvalue::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('familyvalue')->withSuccess( 'Familyvalue Status Changed..' );
    }

    public function edit($id){
        $familyvalue = Familyvalue::find($id);
        return response()->json($familyvalue);
    }

    public function update(Request $request){
        $update = Familyvalue::find($request->id);
        $update->familyvalue = $request->familyvalue;
        $update->update();
        return redirect()->route('familyvalue')->withSuccess( 'Familyvalue has been updated successfully' );
    }

    public function delete($id){
        $delete = Familyvalue::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('familyvalue')->with('message','Familyvalue has been deleted successfully');

    }
}