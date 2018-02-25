<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //to return index file
    public function index(){
        return view ('pages/index');
    }

    public function about(){
        return view ('pages/about');
    }
    public function login(){
        return view ('pages/login');
    }
    public function register(){
        return view ('pages/register');
    }
    public function services(){
        return view ('pages/services');
    }
    public function account(){
        return view ('pages/account');
    }
    public function search(){
        return view ('pages/postSearch');
    }
}


