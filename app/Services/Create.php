<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Create
{
    public function createUser(object $request): void
    {
        $remember = isset($request->remember) ? true : false;
        
        DB::beginTransaction();
            $data = $request->except('_token');
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
        DB::commit();

        if(!Auth::user()){
            Auth::login($user, $remember);
        }
    }
}