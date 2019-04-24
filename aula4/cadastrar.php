<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastrar</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
                require "Conn.php";
                $dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
                if(isset($dados['btnCad'])){
                    unset($dados['btnCad']);
                    $con = new Conn();
                    var_dump($dados);
                    $sql = "insert into cliente(nome, email) values (:nome, :email);";
                    $prepare = $con->abrirConexao()->prepare($sql);
                    $prepare->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                    $prepare->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                    $prepare->execute();
                    if($prepare->rowCount()>0)
                        echo("Dados inseridos com sucesso!!!");
                }

            ?>

            <form method="post" action="">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input autocomplete="off" required type="text" name="nome" class="form-control" id="nome"  placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">E-mail</label>
                    <input autocomplete="off" value="" type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                </div>

                <button type="submit" name="btnCad" class="btn btn-outline-success">Cadastrar</button>
                <button type="reset" class="btn btn-outline-danger">Limpar</button>
            </form>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
