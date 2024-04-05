<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = ['nome', 'email', 'cpf'];

    public function saveUser($nome, $cpf, $email)
    {
        Usuario::created([
            'nome' => $nome,
            'email' => $email,
            'cpf' => $cpf,
            'created_at' => null,
            'updated_at' => null
        ]);
    }
}
