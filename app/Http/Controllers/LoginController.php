<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Foemoney - Planilhas | Login';

        return view('login/index', compact('title'));
    }
}
