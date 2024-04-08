<!-- resources/views/usuarios/index.blade.php -->

 @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">



            <div class="col-md-8">
                <form action="{{ route('usuarios.index') }}" method="post" class="border rounded-3 mb-2">
                    @csrf
                    <div class="row col-12 mb-2 m-lg-1">
                        <div class="col-6 p-0">
                            <label for="formGroupExampleInput" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Digite seu nome">
                        </div>

                        <div class="col-4">
                            <label for="formGroupExampleInput2" class="form-label">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="formGroupExampleInput2" placeholder="Digite seu CPF">
                        </div>
                    </div>
                    <div class="col-6 mb-3 m-lg-1">
                        <label for="formGroupExampleInput2" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Digite seu e-mail">
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2 m-lg-1">Enviar</button>
                    @error('nome')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </form>

                <div class="card">
                    <div class="card-header">Lista de Usuários</div>

                    <div class="card-body">
                        <div class="table-responsive"> <!-- Adicionado para tornar a tabela responsiva -->
                            <table class="table table-bordered table-hover">
                                <thead>

                                <tr>
                                    <th>Nomes</th>
                                    <th>E-mail</th>
                                    <th>CPF</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario['nome'] }}</td>
                                        <td>{{ $usuario['email'] }}</td>
                                        <td>{{ $usuario['cpf'] }}</td>
                                        <td class="text-center"> <button type="button" class="btn btn-secondary">Apagar</button> </td>
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
