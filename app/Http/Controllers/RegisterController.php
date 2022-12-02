<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function registerUser(RegisterRequest $request)
    {

        $user = User::create($request->validated());

        Auth::login($user);

        return redirect('/')->with('success', 'Аккаунт успешно зарегестрирован')->with('sss', $request);
    }

    public function registerAdmin()
    {
        
    }
}
