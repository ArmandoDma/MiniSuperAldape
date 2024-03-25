<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PedidosController
{
    public function index(){
        //Auth::logout();
        //return redirect("login");
        return view("admin.home.pedidos");
    }    //


    /*public function logout(Request $request){
        Auth::logout();
        return redirect("login");
    }*/
}
