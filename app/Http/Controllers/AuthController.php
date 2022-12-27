<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function register(){
        return view('auth.registration');
    }
    public function store(RegistrationRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $result =$user->save();
        if ($result){
        return to_route('index')->with('success','You Have Registered Successfully');
        }
        else{
            return to_route('index')->with('fail',"You Haven't Registered Successfully");
        }
    }

    public function login(){
        return view('auth.login');
    }
    public function logged(LoginRequest $request){
        $user = User::query()->where('email','=',$request->email)->first();
        if ($user){
            if (Hash::check($request->password ,$user->password)){
                $request->session()->put('loginId',$user->id);
                return to_route('auth.dashboard')->with('successful','You Have logged successfully');
            }else{
                return to_route('index')->with('failed','password not matches');
            }
        }else{
            return to_route('index')->with('failed','email is not registered');
        }


    }
    public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect()->route('auth.login');
        }

    }
    public function dashboard(){
        $data = array();
        if (Session::has('loginId')){
            $data = User::query()->where('id','=',Session::get('loginId'))->first();
        }
        return view('auth.dashboard',compact('data'));
    }
}
