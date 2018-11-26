<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuario extends Model
{
    use Notifiable;
    private $table = "Usuario";

    protected $fillable = [
        'cpf', 'telefone', 'nome', 'senha', 'email', 'tipo', 'punicao',
    ];

    protected $hidden = [
        'senha',
    ];
}
