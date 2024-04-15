<?php

namespace App\Http\Controllers;
use App\Models\Parentalstatus;
use Illuminate\Http\Request;
use Session;

class ParentalstatusController extends Controller
{
    public function index(){
        $parentalstatus = Parentalstatus::where('is_deleted',0)->get();
        return view('superadmin.parentalstatus.index')->with(['parentalstatus'=>$parentalstatus]);
    }

    public function store(Request $request){
       
        $store = new Parentalstatus();
        $store->parentalstatus = $request->parentalstatus;
        $store->save();
       
        return redirect()->route('parentalstatus')->withSuccess( 'Parentalstatus has been store successfully' );
    }

    public function status($id,$code){
        $parentalstatus = Parentalstatus::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('parentalstatus')->withSuccess( 'Parentalstatus Status Changed..' );
    }

    public function edit($id){
        $parentalstatus = Parentalstatus::find($id);
        return response()->json($parentalstatus);
    }

    public function update(Request $request){
        $update = Parentalstatus::find($request->id);
        $update->parentalstatus = $request->parentalstatus;
        $update->update();
        return redirect()->route('parentalstatus')->withSuccess( 'Parentalstatus has been updated successfully' );
    }

    public function delete($id){
        $delete = Parentalstatus::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('parentalstatus')->with('message','Parentalstatus has been deleted successfully');

    }
}