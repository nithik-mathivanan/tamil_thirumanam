<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Session;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::where('is_deleted',0)->get();
        return view('superadmin.profile.index')->with(['profile'=>$profile]);
    }

    public function store(Request $request){
       
        $store = new Profile();
        $store->created_by = $request->created_by;
        $store->save();
       
        return redirect()->route('profile')->withSuccess( 'Profile has been store successfully' );
    }

    public function status($id,$code){
        $profile = Profile::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('profile')->withSuccess( 'Profile Status Changed..' );
    }

    public function edit($id){
        $profile = Profile::find($id);
        return response()->json($profile);
    }

    public function update(Request $request){
        $update = Profile::find($request->profile_id);
        $update->created_by = $request->created_by;
        $update->update();
        return redirect()->route('profile')->withSuccess( 'Profile has been updated successfully' );
    }
    public function delete($id){
        $delete = Profile::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('profile')->with('message','Profile has been deleted successfully');

    }
}
