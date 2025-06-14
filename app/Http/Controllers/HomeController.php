<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\ContactUs;
use App\Models\AboutUsFeedback;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Chome()
    {
        return view('User.home');
    }

    public function about()
    {
        return view('User.aboutus');
    }
    public function contact()
    {
        return view('User.contactus');
    }
    public function aboutstore(Request $request)
    {
        $store= new AboutUsFeedback();
        $store->username = $request->userName;
        $store-> userfeedback= $request->userFeedback;
        $store->save();
        return redirect()->back()->with('success', 'About Us information stored successfully.');


    }
    public function contactstore(Request $request)
    {
        $store= new ContactUs();
        $store->name = $request->name;
        $store->email= $request->email;
         $store->message= $request->message;
        $store->save();
        return redirect()->back()->with('success', 'Contact Us information stored successfully.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
