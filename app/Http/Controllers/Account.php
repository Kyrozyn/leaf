<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Account extends Controller
{
    public function loginForm()
    {
        return view('pages.auth.login');
    }

    public function signUpForm()
    {
        return view('pages.auth.signup');
    }

    public function loginCheck(Request $req)
    {
        $katakunci = $req->get('katakunci');
    }
}
