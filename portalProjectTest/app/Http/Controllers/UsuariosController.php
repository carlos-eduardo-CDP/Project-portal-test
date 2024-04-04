<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Certifique-se de importar o modelo Usuario


class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all()->toArray();
        //$usuarios['items'][]['attributes'];
        //dd($usuarios['0']['nome']);
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }
}
