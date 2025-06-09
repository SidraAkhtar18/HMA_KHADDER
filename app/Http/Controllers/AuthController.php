<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\Role;
use Illuminate\Http\Request;
use Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
            return view ("Auth.login");

    }}}
    public function show(Auth $auth)
    {
        
    }

    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
