<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        $title = 'Formoney - Planilhas | Login';

        return view('login/create', compact('title'));
    }

    public function store(Request $request)
    {
        $remember = isset($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors('Email e/ou senhas inválidos!');
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
