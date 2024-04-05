<!-- resources/views/usuarios/index.blade.php -->

<!-- @extends('layouts.app')-->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header">Lista de Usuários</div>

                    <div class="card-body">
                        <div class="table-responsive"> <!-- Adicionado para tornar a tabela responsiva -->
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nomes</th>
                                    <th>Email</th>
                                    <th>Cpf</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario['nome'] }}</td>
                                        <td>{{ $usuario['email'] }}</td>
                                        <td>{{ $usuario['cpf'] }}</td>
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
