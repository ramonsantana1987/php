<?php

/**
 *
 * @copyright (c) year, Ramon Santana
 */
class Cliente {
    /**
     * Essa variável Aloca o nome do Cliente
     * @var int
     */
    public $nome;
    /**
     *
     * @var int
     */
    public $idade;
    /**
     *
     * @var string
     */
    private $sexo;
    
    public function getSexo() {
        return $this->sexo;
    }

    
    public function setSexo(string $sexo) {
        $this->sexo = $sexo;
    }


    
    
    
}

$cliente = new Cliente();
$cliente->nome="Ramon";
$cliente->idade=32;
$cliente->setSexo("Ramon");
echo("<pre>");
var_dump($cliente);
echo("</pre><hr>");
echo($cliente->getSexo());





