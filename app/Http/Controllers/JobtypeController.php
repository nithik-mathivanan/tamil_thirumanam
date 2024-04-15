<?php

namespace App\Http\Controllers;
use App\Models\Jobtype;
use Illuminate\Http\Request;
use Session;

class JobtypeController extends Controller
{
    public function index(){
        $jobtype = Jobtype::where('is_deleted',0)->get();
        return view('superadmin.jobtype.index')->with(['jobtype'=>$jobtype]);
    }

    public function store(Request $request){
       
        $store = new Jobtype();
        $store->jobtype = $request->jobtype;
        $store->save();
       
        return redirect()->route('jobtype')->withSuccess( 'Jobtype has been store successfully' );
    }

    public function status($id,$code){
        $jobtype = Jobtype::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('jobtype')->withSuccess( 'Jobtype Status Changed..' );
    }

    public function edit($id){
        $jobtype = Jobtype::find($id);
        return response()->json($jobtype);
    }

    public function update(Request $request){
        $update = Jobtype::find($request->id);
        $update->jobtype = $request->jobtype;
        $update->update();
        return redirect()->route('jobtype')->withSuccess( 'Jobtype has been updated successfully' );
    }
    public function delete($id){
        $delete = Jobtype::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('jobtype')->with('message','Jobtype has been deleted successfully');

    }
}
