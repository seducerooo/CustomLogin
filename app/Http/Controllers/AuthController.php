<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(){
        return "index";
    }
    public function register(){
        return view('auth.registration');
    }

    public function login(){
        return view('auth.login');
    }
    public function logout(){
        return "logout";
    }
    public function dashboard(){
        return "dashboard";
    }
}
