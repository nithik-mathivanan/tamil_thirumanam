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
}
