<?php

namespace App\Http\Controllers;

use App\Services\Create;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        $title = 'Formoney - Planilhas | Register';

        return view('register/create', compact('title'));
    }

    public function store(Request $request, Create $create)
    {
        if($request->password_verify !== $request->password){
            return back()->withErrors('As senhas não conferem!');
        }
        
        $create->createUser($request);
        
        return redirect('/dashboard');
    }
}
