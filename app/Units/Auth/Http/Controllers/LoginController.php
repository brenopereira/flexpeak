<?php

namespace App\Units\Auth\Http\Controllers;

use App\Support\Http\Controller;
use App\Units\Auth\Http\Requests\LoginAccountRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class LoginController
 * @package App\Units\Auth\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return view('auth::login');
    }

    public function store(LoginAccountRequest $request)
    {
        $auth = Auth::attempt($request->only('email', 'password'));

        return view('auth::login')->with('message', 'Erro ao logar, verifique seu e-mail e senha.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login.index');
    }
}
