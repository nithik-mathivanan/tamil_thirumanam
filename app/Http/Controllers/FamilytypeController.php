<?php

namespace App\Http\Controllers;
use App\Models\Familytype;
use Illuminate\Http\Request;
use Session;

class FamilytypeController extends Controller
{
    public function index(){
        $familytype = Familytype::where('is_deleted',0)->get();
        return view('superadmin.familytype.index')->with(['familytype'=>$familytype]);
    }

    public function store(Request $request){
       
        $store = new Familytype();
        $store->familytype = $request->familytype;
        $store->save();
       
        return redirect()->route('familytype')->withSuccess( 'Familytype has been store successfully' );
    }

    public function status($id,$code){
        $familytype = Familytype::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('familytype')->withSuccess( 'Familytype Status Changed..' );
    }

    public function edit($id){
        $familytype = Familytype::find($id);
        return response()->json($familytype);
    }

    public function update(Request $request){
        $update = Familytype::find($request->id);
        $update->familytype = $request->familytype;
        $update->update();
        return redirect()->route('familytype')->withSuccess( 'Familytype has been updated successfully' );
    }
    public function delete($id){
        $delete = Familytype::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('familytype')->with('message','Familytype has been deleted successfully');

    }
}