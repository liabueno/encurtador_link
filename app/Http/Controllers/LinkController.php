<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function generate(){
        return View('app.generate');
    }

    public function remove(){
        return View('app.list');
    }

    public function list(){
        return View('app.list');
    }
}
