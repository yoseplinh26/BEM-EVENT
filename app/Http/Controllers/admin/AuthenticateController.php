<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    public function login(){
        // return view('admin.dashboard');
        return view('admin.login');
        // var_dump(Auth::user()->username);
        // return Hash::make('admin');
        // var_dump('hello');
        // return false;

    }

    public function index(){
        // return view('admin.login');
        return 'test';
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    // Hash::make($data['password']),

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
           'password' => ['required'],
       ]);


 
       if (Auth::attempt($credentials)) {
       
        //   var_dump($request->session()->regenerate());
          $request->session()->regenerate();
            
        //    return false;

        //    return 'anu/';
           return redirect()->intended('/dashboard');

       }

    //    return 'ada masalah';
       return back()->with('loginError', 'Login failed!!');
    // return 'halo bos';
    }

    public function logout(){
        Auth::logout();

        // invalidate session nya biar gak di pake 
        request()->session()->invalidate();

        // bikin baru token nya supaya gak dibajak
        request()->session()->regenerateToken();
    
        return redirect('/login');
    }
}
