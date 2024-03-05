<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use App\Models\ModelUser;
use App\Models\tb_barang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Routing\Route;
use Illuminate\Auth\Events\Registered;
use Illuminate\Pagination\LengthAwarePaginator;

class LoginRegister extends Controller
{
    public function index()
    {
        return view("Login", [
            'judul' => 'Login'
        ]);
    }

    public function PostLoginUser(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/Products');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function Registrasi()
    {
        return view('Halaman_Registrasi_User', [
            'judul' => 'Register'
        ]);
    }

    public function PostRegisterUser(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required', 'email:dns|unique:users',
            'password' => 'required|min:9|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0,
            'image' => 'default.jpg'
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/email/verify');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function ForgotVerify()
    {
        return view('auth.verify_forgot', [
            'judul' => 'Forgot'
        ]);
    }
}
