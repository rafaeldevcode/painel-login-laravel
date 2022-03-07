<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(Request $request)
    {
        $title = 'Formoney - Planilhas | Login';
        $message = $request->session()->get('message');

        return view('login/create', compact('title', 'message'));
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

    public function resetPass(Request $request)
    {
        $user = User::where('email',  $request->email_reset)->get();

        if(empty($user[0])){
            return back()->withErrors('Email não cadastrado! Por favor digite seu email novamente.');
        }

        $request->session()->flash('message', 'Link de redefinição enviado para seu email.');

        return redirect('/login');
    }
}
