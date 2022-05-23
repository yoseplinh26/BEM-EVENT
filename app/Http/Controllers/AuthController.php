<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('do_logout');
    }
    public function login()
    {
        return view('mahasiswa.auth.login');
    }
    public function register()
    {
        return view('mahasiswa.auth.register');
    }

    public function do_register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'prodi' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->prodi = $request->prodi;
        $user->nim = $request->nim;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->password = Hash::make($request->password);
        $user->role = 'u';
        $user->save();
        return redirect('auth')->with('status', 'Berhasil Registrasi');
    }
    

    public function do_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
            {
                return redirect()->intended('home');
            }else{
                return back()->with('loginError', 'Password anda salah!');
            }
        }else{
            return back()->with('loginError', 'Username anda belum terdaftar!');
        }
    }

    public function do_logout()
    {
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect('auth');
    }
}

