<?php

require_once 'Conta.php';

//Sempre que o new por executado, o método __construct vai ser executado também
$primeiraConta = new Conta('123456789', 'Vinicius Dias');
$primeiraConta->depositar(500);
$primeiraConta->Sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta('6789456123', 'Karolina');
var_dump($segundaConta);

new Conta('123', 'dfdsfgdgfgf');

echo Conta::getNumeroContas();