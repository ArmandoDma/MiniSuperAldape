<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservarController
{
    //
    public function index($value){
        $id = $value;
        return view('admin.home.directions', compact('id'));
    }
}
