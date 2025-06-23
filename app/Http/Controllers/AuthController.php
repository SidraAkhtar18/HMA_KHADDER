<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\Role;
use Illuminate\Http\Request;
use Hash;

class AuthController extends Controller
{
    public function Rindex()
    {
        $roles = Role::all();
        return view("Auth.signup" ,compact('roles'));
    }
    public function Lindex()
    {
        return view("Auth.login");
    }
    public function role()
    {
        return view("Auth.role");
    }
    public function store(Request $request)
    {     
       $store=new Auth();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $store->role_id = $request->choose; // Assuming role_id is passed from the form
        $store->save();
       return redirect()->route('login')->with('success', 'Registration successful. Please log in.');   

    }
    public function rolestore(Request $request)
    {
        $store = new Role();
        $store->name= $request->role;      
        $store->save();
        return redirect()->back();
    }   
    public function Auth(Request $request)
    {
        $user=Auth::where('email', $request->email) ->first();
        if($user){
            $password = $user->password;
            if(Hash::check($request->password,$password)){ 
            if($user->role_id == "1"){
                return view("Admin.home");
            }
            else if ($user->role_id =="2"){
                return view ("User.home");
            }}
        else{
            return view ("Auth.login")->with('fail', 'Invalid detail');

    }}}
    public function Logout()
    {
        return view('Auth.login');
    }
}
