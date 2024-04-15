<?php

namespace App\Http\Controllers;
use App\Models\Education;
use Illuminate\Http\Request;
use Session;

class EducationController extends Controller
{
    public function index(){
        $education = Education::where('is_deleted',0)->get();
        return view('superadmin.education.index')->with(['education'=>$education]);
    }

    public function store(Request $request){
       
        $store = new Education();
        $store->education = $request->education;
        $store->save();
       
        return redirect()->route('education')->withSuccess( 'Education has been store successfully' );
    }

    public function status($id,$code){
        $education = Education::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('education')->withSuccess( 'Education Status Changed..' );
    }

    public function edit($id){
        $education = Education::find($id);
        return response()->json($education);
    }

    public function update(Request $request){
        $update = Education::find($request->id);
        $update->education = $request->education;
        $update->update();
        return redirect()->route('education')->withSuccess( 'Education has been updated successfully' );
    }

    public function delete($id){
        $delete = Education::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('education')->with('message','Education has been deleted successfully');

    }
}

