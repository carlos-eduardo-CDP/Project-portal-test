<!-- resources/views/usuarios/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="display: flex;flex-direction: column; align-items: center;">
                    <div class="card-header">Lista de Usuários</div>

                    <div class="card-body">
                        <div class="table-responsive"> <!-- Adicionado para tornar a tabela responsiva -->
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nomes</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario['nome'] }}</td>
                                        <td>{{ $usuario['email'] }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
