@extends('master')
@section('content')
    <?php
    $func = $funcionario[0];
    $func->data_nascimento = new DateTime($func->data_nascimento);
    ?>
    <div class="row">
        <div class="col-md-12>">
            <form action="<?= url('/editarSalvar', ['id'=>$func->id]); ?>" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" value="<?= $func->nome ?>" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" value="<?= $func->data_nascimento->format('Y-m-d') ?>" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection