@extends('master')
@section('content')
    <div class="row mr-2">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Data de Nascimento</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($funcionarios)) {
                        foreach ($funcionarios as $funcionario) {
                            $funcionario->data_nascimento = new DateTime($funcionario->data_nascimento);
                    ?>
                    <tr>
                        <td><?= $funcionario->id ?></td>
                        <td><?= $funcionario->nome ?></td>
                        <td><?=  $funcionario->data_nascimento->format('d/m/Y') ?></td>
                        <td><a href="{{ url('/editar',[$funcionario->url]) }}">Editar</a> | <a href="{{ url('/excluir',[$funcionario->id]) }}">Excluir</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </div>
@endsection