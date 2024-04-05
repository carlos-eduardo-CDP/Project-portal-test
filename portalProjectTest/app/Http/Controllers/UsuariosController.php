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
        //dd($usuarios['0']);
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function saveUser(Request $request)
    {
        $dados = $request;
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'cpf' => 'required|string|max:14', // Exemplo de validação de CPF
        ]);

            Usuario::create($request->all());

        return redirect()->route('usuarios.index');
    }
}
