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
        $create->createUser($request);
        
        return redirect('/dashboard');
    }
}
