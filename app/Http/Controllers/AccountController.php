<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Usuario;

class AccountController extends Controller
{
    public function register(){
        return View('site.register');
    }

    public function recover(){
        return View('site.recover');
    }

    public function login(){
        return View('site.login');
    }

    public function logout(){
        return View('site.logout');
    }

    public function contact(Request $request){

        $contato = new Contato();
        $contato->create($request->all());
        return View('site.contact');
    }

    public function fallback(){
        return View('site.fallback');
    }
}
