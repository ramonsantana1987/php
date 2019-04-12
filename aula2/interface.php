<?php

require __DIR__ . '/Cliente.php';
require __DIR__ . '/Endereco.php';

$endereco = new Aula2\Endereco("Brasília", "Rua 10");
echo $endereco->getCidade();
$cliente = new Cliente($endereco->getCidade(), $endereco->getRua(), "aa", 10, "F");
echo("<pre>");
var_dump($cliente);
echo("</pre>");

echo($cliente->getEndereco()->getRua());
