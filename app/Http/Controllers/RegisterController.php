<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $title = 'Foemoney - Planilhas | Register';

        return view('register/index', compact('title'));
    }
}
