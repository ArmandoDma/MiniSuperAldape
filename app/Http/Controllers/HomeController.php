<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index(){

        if(Auth::check()){
            $user = Auth::user();
            return view("admin.home.index", compact('user'));
        }
    }
}
