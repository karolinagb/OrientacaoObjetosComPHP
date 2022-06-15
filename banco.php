<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'CPF.php';
require_once 'Endereco.php';

//Sempre que o new por executado, o método __construct vai ser executado também
$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua', '71B');
$cpfVinicius = new CPF('123.456.789-77');
$vinicius = new Titular($cpfVinicius, 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->Sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$cpfJoana = new CPF('123.123.123-22');
$joana = new Titular($cpfJoana, 'Joana', $endereco);
$segundaConta = new Conta($joana);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$cpf = new CPF('123.987.456-66');
$outra = new Conta(new Titular($cpf, 'dfdsfgdgfgf', $outroEndereco));
unset($segundaConta);

echo PHP_EOL . Conta::getNumeroContas() . PHP_EOL;
