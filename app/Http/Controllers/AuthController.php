<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index(){
        return "index";
    }
    public function register(){
        return view('auth.registration');
    }
    public function store(RegistrationRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password,);
        $user->save();
        return to_route('index');
    }

    public function login(){
        return view('auth.login');
    }
    public function logged(LoginRequest $request){

    }
    public function logout(){
        return "logout";
    }
    public function dashboard(){
        return view('auth.dashboard');
    }
}
