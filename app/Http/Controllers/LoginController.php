<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController
{
    public function index(){
        if(Auth::check()){
            return redirect()->intended('principal');
        }
        return view("auth.login");
    }

    public function login (Request $request)
    {
        $request->validate([
            'form_uname' => 'required',
            'form_upass' => 'required',
        ]);

        $user = User::where('correo', $request->input('form_uname'))->first();

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && Hash::check($request->input('form_upass'), $user->contraseña)) {
            // Iniciar sesión
            Auth::login($user);
            return redirect()->intended('principal')->withSuccess('Signed in');
        }

        // Si las credenciales no son válidas, redirigir de vuelta con un mensaje de error
        return redirect("login")->withErrors([
            'form_uname' => 'Credenciales inválidas.',
        ]);

    }
}
