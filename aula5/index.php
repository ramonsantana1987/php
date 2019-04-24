<?php
require_once __DIR__ . "/FuncionarioModelo.php";
require_once __DIR__ . "/Funcionario.php";
use Aula5\Funcionario;
/**
 * @var Funcionario
 */
$funcionarios =  \Aula5\FuncionarioModelo::listar();


$funcionario = new Funcionario();

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Aula 5</title>
</head>
<body>
<div class="container-fluid" style="margin-top: 1%">
    <div class="row">
        <div class="col-md-12">
            <a href="cadastrar.php" class="btn btn-outline-primary">Cadastrar</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Salário</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($funcionarios as $funcionario){
                    var_dump($funcionarios);
                ?>
                <tr>
                    <th scope="row"><?= $funcionario->getId(); ?></th>
                    <td><?= $funcionario->getNome() ?></td>
                    <td><?= $funcionario->getIdade(); ?></td>
                    <td><?= $funcionario->getSalario(); ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>