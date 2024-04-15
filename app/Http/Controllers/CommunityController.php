<?php

namespace App\Http\Controllers;
use App\Models\Religion;
use App\Models\Community;
use Illuminate\Http\Request;
use Session;

class CommunityController extends Controller
{
    public function index(){
        $community = Community::with('getReligion')->where('is_deleted',0)->get();
        $religion = Religion::where('status',0)->get();
        return view('superadmin.community.index')->with(['community'=>$community,'religion'=>$religion]);
    }

    public function store(Request $request){
       
        $store = new Community();
        $store->religion = $request->religion;
        $store->community = $request->community;
        $store->save();
       
        return redirect()->route('community')->withSuccess( 'Community has been store successfully' );
    }

    public function status($id,$code){
        $community = Community::where('id',$id)->update(['status'=>$code]);
        return redirect()->route('community')->withSuccess( 'Community Status Changed..' );
    }

    public function edit($id){
        $community = Community::find($id);

        return response()->json($community);
    }

    public function update(Request $request){
       
        $update = Community::find($request->community_id);
       
        $update->religion = $request->religion;
        $update->community = $request->community;
        $update->update();
        return redirect()->route('community')->withSuccess( 'Community has been updated successfully' );
    }

    public function delete($id){
        $delete = Community::where('id',$id)->update(['is_deleted'=>1]);
      return  redirect()->route('community')->with('message','Community has been deleted successfully');

    }
}
