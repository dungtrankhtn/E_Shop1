<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function _construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){
        // // Validate the form data
        // $this->validate($request,[
        //     'email' => 'required|email',
        //     'password' => 'required|min:6'
        // ]);
        // // Attempt to log the user in
        // if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password' => $request->password])){
        //     // if successful, then redirect to their intended location
        //     return redirect()->intended('/admin');
        // }
        // // if unsuccessful, the redirect back to the login with the form data
        // else{
        //     return redirect()->back()->withInput($request->only('email', 'remember'));
        // }
        $this->validate($request,[
            'email' =>'required|email',
            'password' =>'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password])){
            // if successful, then redirect to their intended location
            return redirect()->intended('/admin');
            
        }
        else{
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
}
