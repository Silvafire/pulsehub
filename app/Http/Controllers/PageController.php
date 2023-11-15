<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function planostreino(){
        return view('planostreino');
    }

    public function blog(){
        return view('blog');
    }

    public function modalidades(){
        return view('modalidades');
    }

    public function servicos(){
        return view('servicos');
    }

    public function staff(){
        return view('staff');
    }
}
