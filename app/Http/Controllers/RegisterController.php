<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController
{
    //
    public function index()
    {
        if(Auth::check()){
            return redirect()->intended("principal");
        }
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'euregister' => 'required',
            'passregister' => 'required',
            'username'=>'required',
            'dir' => 'required',
            'age' => 'required',
            'tel' => 'required',
            'genre' => 'required',
        ]);
        //convertir en bool
        $generoTexto = $request->input('genre');
        $generoBooleano = ($generoTexto === 'femenino');

        $user = Login::create([
            'user_id' => intval($request->input('age')),
            'username' => $request->input('username'),
            'correo' => $request->input('euregister'),
            'contraseña' => bcrypt($request->input('passregister')),
        ]);

        $customer = Register::create([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('dir'),
            'edad' => $request->input('age'),
            'telefono' => $request->input('tel'),
            'genero' => $generoBooleano,
        ]);

        // Redirigir a alguna página después de guardar los datos
        return redirect()->intended('login');
    }
}
