<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Front\Front;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
       return view('front.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about(Request $request)
    {
        return view('front.about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function faq(Request $request)
    {
        return view('front.faq');
    }

    /**
     * Display the specified resource.
     */
    public function contact(Request $request)
    {
        return view('front.contact');
    }

    public function wedding(Request $request)
    {
        return view('front.wedding');
    }


    public function matching_profiles(Request $request)
    {
        return view('front.matching_profiles');
    }



    /**
     * Display the specified resource.
     */
    public function plans(Request $request)
    {
        return view('front.plans');
    }

    /**
     * Show the form for editing the specified resource.
     */
    
}
