<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'data_users';
    protected $fillable = [
        'nombre',
        'direccion',
        'edad',
        'telefono',
        'genero',
    ];

    public function login(){
        return $this->belongsTo(Login::class);
    }
}
