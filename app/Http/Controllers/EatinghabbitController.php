<?php

namespace App\Http\Controllers;
use App\Models\Eatinghabbit;
use Illuminate\Http\Request;
use Session;

class EatinghabbitController extends Controller
{
    public function index(){
        $eatinghabbit = Eatinghabbit::where('is_deleted',0)->get();
        return view('superadmin.eatinghabbit.index')->with(['eatinghabbit'=>$eatinghabbit]);
    }

    public function store(Request $request){
       
        $store = new Eatinghabbit();
        $store->eatinghabbit = $request->eatinghabbit;
        $store->save();
       
        return redirect()->route('eatinghabbit')->withSuccess( 'Eatinghabbit has been store successfully' );
    }

    public function status($id,$code){
        $eatinghabbit = Eatinghabbit::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('eatinghabbit')->withSuccess( 'Eatinghabbit Status Changed..' );
    }

    public function edit($id){
        $eatinghabbit = Eatinghabbit::find($id);
        return response()->json($eatinghabbit);
    }

    public function update(Request $request){
        $update = Eatinghabbit::find($request->id);
        $update->eatinghabbit = $request->eatinghabbit;
        $update->update();
        return redirect()->route('eatinghabbit')->withSuccess( 'Eatinghabbit has been updated successfully' );
    }

    public function delete($id){
        $delete = Eatinghabbit::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('eatinghabbit')->with('message','Eatinghabbit has been deleted successfully');

    }
}