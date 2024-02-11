<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        return view('map/index');
    }
    public function about(){
        return view('map/about');
    }
    public function shop(){
        return view('map/shop');
    }
    public function news(){
        return view('map/news');
    }
    public function cart(){
        return view('map/cart');
    }
    public function contact(){
        return view('map/contact');
    }
    public function checkout(){
        return view('map/checkout');
    }
    // public function register(){
    //     return view('map/register');
    // }
    // public function login(){
    //     return view('map/login');
    // }
}

