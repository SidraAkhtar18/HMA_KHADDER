<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\ContactUs;
use App\Models\AboutUsFeedback;
use App\Models\Product;
use App\Models\Auth;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    
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
   public function exchangeReturn()
    {
        return view('user.exchange&returnpolicy');
    }

    public function terms()
    {
        return view('user.termsofservices');
    }

    public function privacy()
    {
        return view('user.privacypolicy');
    }

    public function shipping()
    {
        return view('user.shippingpolicy');
    }
   
}
