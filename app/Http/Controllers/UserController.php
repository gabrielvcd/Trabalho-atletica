<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
        return view ('login');
    }

    public function login(Request $request){

        //dd($request->all());
       if(Auth::attempt(['email' => $request ->email, 'password' => $request ->password]))
       {
        return redirect()->route('home')->with('success', 'Bem-vindo, Mamute');
        //dd('você está logado');l
       }else{
        return redirect()->route('login')->withErrors(['error'=>'Email ou senha inválidos']);
        //dd('você não está logado');
       }
    }
    public function destroyy(){
        Auth::logout();
        return redirect()->route('login');
        //var_dump('logout');
    }

}
