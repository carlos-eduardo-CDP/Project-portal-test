<?php
namespace App\Repositories;
use App\Models\Usuario;

class UsuarioRepository implements UsuarioRepositoryInterface
{
    protected Usuario $model;
    public function __construct(Usuario $model)
    {
        $this->model = $model;
    }
}
