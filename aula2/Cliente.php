<?php

/**
 *
 * @copyright (c) year, Ramon Santana
 */
class Cliente {

    private $nome;
    private $idade;
    private $sexo;

    /**
     *
     * @var Endereco
     */
    private $endereco;

    public function __construct($cidade, $rua, $nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->endereco = new Aula2\Endereco($cidade, $rua);
    }

    public function getNome(): ?string {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getEndereco() {
        return $this->endereco;
    }

}
