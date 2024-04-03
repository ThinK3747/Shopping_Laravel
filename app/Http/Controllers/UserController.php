<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view("fe.login");
    }
    public function register(){
        return view("fe.register");
    }
    public function postRegister(Request $req){
        $req->merge(['password'=>Hash::make($req->password)]);

       try{
            User::create($req->all());
       }catch(\Exception $e){
        return back()->with('error', $e->getMessage());
        }
    return redirect()->route('login');
    }
    public function postLogin(Request $req){
       if(Auth::attempt(['email'=> $req->email ,'password'=> $req->password])){
        return redirect()->route('index');
    }
    return redirect()->back()->with('error','Sai tài khoản hoặc mật khẩu!');
    }
    public function logout(Request $req){
        Auth::logout();
     return redirect()->back();
     }
}
