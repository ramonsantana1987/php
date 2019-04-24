<?php


namespace Aula5;

require_once __DIR__ . "/Funcionario.php";
require_once __DIR__ . "/Conn.php";
use Aula5\Conn;
use Aula5\Funcionario;


class FuncionarioModelo
{

    public function cadastrar(Funcionario $funcionario){
        try{

            $dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRIPPED);
                $con = new Conn();
                $sql = "insert into funcionario(nome, idade, salario) values (:nome, :idade, :salario);";
                $prepare = $con->abrirConexao()->prepare($sql);
                $prepare->bindParam(':nome', $funcionario->getNome(), PDO::PARAM_STR);
                $prepare->bindParam(':idade', $funcionario->getIdade(), PDO::PARAM_INT);
                $prepare->bindParam(':salario', $funcionario->getSalario(), PDO::PARAM_INT);
                $prepare->execute();
                if($prepare->rowCount()>0)
                    echo("Dados inseridos com sucesso!!!");


        }catch (\Exception $e){
            echo("Erro: ".$e->getMessage());
        }
    }


    /**
     * @return array|\Aula5\Funcionario
     */
    public function listar():array{
        try{
            /** @var Funcionario $funcionarios */
            $funcionarios = [];
            $con = new Conn();
            $sql = "select id, nome, idade, salario from funcionario;";
            $prepare = $con->abrirConexao()->prepare($sql);
            $prepare->execute();

            while($result = $prepare->fetch(\PDO::FETCH_ASSOC)){
                $funcionario = new Funcionario();
                $funcionario->setId($result['id']);
                $funcionario->setNome($result['nome']);
                $funcionario->setIdade($result['idade']);
                $funcionario->setSalario($result['salario']);
                $funcionarios[]= $funcionario;
            }
            /** @var array|\Aula5\Funcionario */
            return $funcionarios;
        }catch (\Exception $e){
            echo("Erro".$e->getMessage());
            die;
        }
    }



}
