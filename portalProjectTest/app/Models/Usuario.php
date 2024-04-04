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
}
