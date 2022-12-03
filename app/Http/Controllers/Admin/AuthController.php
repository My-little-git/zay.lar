<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::guard("admin")->validate($credentials)) {
            return redirect()->to('admin.login')->withErrors(trans('auth.failed'));
        }

        $admin = Auth::guard('admin')->getProvider()->retrieveByCredentials($credentials);

        Auth::guard("admin")->login($admin);

        return redirect('/login/products/');
    }
}
