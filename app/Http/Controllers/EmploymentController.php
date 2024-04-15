<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use Illuminate\Http\Request;
use Session;

class EmploymentController extends Controller
{
    public function index(){
        $employment = Employment::where('is_deleted',0)->get();
       
        return view('superadmin.employment.index')->with(['employment'=>$employment]);
    }

    public function store(Request $request){
       
        $store = new Employment();
       
        $store->employment = $request->employment;
        $store->save();
       
        return redirect()->route('employment')->withSuccess( 'Employment has been store successfully' );
    }
    public function status($id,$code){
        $employment = Employment::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('employment')->withSuccess( 'Employment Status Changed..' );
    }

    public function edit($id){
        $employment = Employment::find($id);

        return response()->json($employment);
    }

    public function update(Request $request){
       
        $update = Employment::find($request->id);
        $update->employment = $request->employment;
        $update->update();
        return redirect()->route('employment')->withSuccess( 'Employment has been updated successfully' );
    }

    public function delete($id){
        $delete = Employment::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('employment')->with('message','Employment has been deleted successfully');

    }
}
