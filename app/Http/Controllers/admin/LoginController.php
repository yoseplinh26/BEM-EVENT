<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            // 'active' => 'login'
        ]);
    }

    public function postlogin(Request $request)
    {
         $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
            // $plain = $credentials['password'];
            // return $this->hasher->check($plain, $user->getAuthPassword());
        ]);

        if(Auth::attempt($credentials)){
            
           $request->session()->regenerate();
           return redirect()->intended('/');
        }

        return back()->with('loginError', 'login failed');
    } 
}
