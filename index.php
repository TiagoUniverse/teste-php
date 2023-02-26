<?php

/**
 * Autor: Tiago César da Silva Lopes
 * Descrição: Testes gerais de PHP
 * Data: 25/02/23
 */

 require_once "model/pessoa.php";

echo "Hello world";


$pessoa = new pessoa();

$pessoa->setNome("Tiagão");

echo "<br>" . $pessoa->getNome();

?>