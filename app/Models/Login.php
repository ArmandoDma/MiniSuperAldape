<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $table = "data_login";
    protected $fillable = [
        'user_id',
        'username',
        'correo',
        'contraseña',
    ];

    public function register(){
        return $this->hasOne(Register::class);
    }
}
