<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';

//Sempre que o new por executado, o método __construct vai ser executado também
$cpfVinicius = new CPF('123.456.789-77');
$vinicius = new Titular($cpfVinicius, 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->Sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$cpfJoana = new CPF('123.123.123-22');
$joana = new Titular($cpfJoana, 'Joana');
$segundaConta = new Conta($joana);
var_dump($segundaConta);

$cpf = new CPF('123.987.456-66');
$outra = new Conta(new Titular($cpf, 'dfdsfgdgfgf'));
unset($segundaConta);

echo PHP_EOL . Conta::getNumeroContas() . PHP_EOL;
