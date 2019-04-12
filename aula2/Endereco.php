<?php
namespace Aula2;


/**
 *
 * @copyright (c) year, Ramon Santana
 */
class Endereco {

    private $cidade;
    private $rua;

    public function __construct($cidade, $rua) {
        $this->cidade = $cidade;
        $this->rua = $rua;
    }

    public function getCidade(): string {
        return $this->cidade;
    }

    public function getRua(): string {
        return $this->rua;
    }

}
