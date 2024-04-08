<?php
namespace App\Service;

use App\Repositories\UsuarioRepository;
use App\Repositories\UsuarioRepositoryInterface;

class UsuarioService
{
    protected UsuarioRepositoryInterface $usuarioRepository;
    public function __construct()
    {

        $this->usuarioRepository = new UsuarioRepository();
    }
}
