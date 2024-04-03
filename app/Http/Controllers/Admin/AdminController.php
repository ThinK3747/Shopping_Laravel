<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin(){
        return view("admin.login");
    }

    public function postLoginAdmin(Request $request){

        if(Auth::attempt(["email"=> $request->email,"password"=>$request->password,'role'=>1], )){
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('error','Sai thông tin!');
    }
    public function signOut(){
        Auth::logout();
        return redirect()->route('loginAdmin');
    }
}
