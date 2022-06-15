<?php

require_once 'Conta.php';
require_once 'Titular.php';

//Sempre que o new por executado, o método __construct vai ser executado também
$primeiraConta = new Conta(new Titular('123456789', 'Vinicius Dias'));
$primeiraConta->depositar(500);
$primeiraConta->Sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('6789456123', 'Karolina'));
var_dump($segundaConta);

$outra = new Conta(new Titular('123', 'dfdsfgdgfgf'));
unset($segundaConta);

echo PHP_EOL . Conta::getNumeroContas() . PHP_EOL;
