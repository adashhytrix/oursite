<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();
            return redirect()->route('admin.dashboard')->with('success','You are Logged in sucessfully.');
        }else {
            return back()->with('error','Whoops! invalid email and password.');
        }
    }
    public function registerstore(Request $request)
    {
       // dd($request->all());
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
           // 'password' =>'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        // Create a new Admin instance and save it to the database
        Admin::create($validatedData);
    
        // Redirect to the login page
        return redirect()->route('admin.adminLogin')->with('success', 'Registration successful. You can now log in.');
    }

    
    public function register(){
        return view('backend.auth.register');
    }
    public function dashboard(){
        return view('backend.dashboard');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
