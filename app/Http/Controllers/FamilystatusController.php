<?php

namespace App\Http\Controllers;
use App\Models\Familystatus;
use Illuminate\Http\Request;
use Session;

class FamilystatusController extends Controller
{
    public function index(){
        $familystatus = Familystatus::where('is_deleted',0)->get();
        return view('superadmin.familystatus.index')->with(['familystatus'=>$familystatus]);
    }

    public function store(Request $request){
       
        $store = new Familystatus();
        $store->familystatus = $request->familystatus;
        $store->save();
       
        return redirect()->route('familystatus')->withSuccess( 'Familystatus has been store successfully' );
    }

    public function status($id,$code){
        $familystatus = Familystatus::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('familystatus')->withSuccess( 'Familystatus Status Changed..' );
    }

    public function edit($id){
        $familystatus = Familystatus::find($id);
        return response()->json($familystatus);
    }

    public function update(Request $request){
        $update = Familystatus::find($request->id);
        $update->familystatus = $request->familystatus;
        $update->update();
        return redirect()->route('familystatus')->withSuccess( 'Familystatus has been updated successfully' );
    }

    public function delete($id){
        $delete = Familystatus::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('familystatus')->with('message','Familystatus has been deleted successfully');

    }
}


