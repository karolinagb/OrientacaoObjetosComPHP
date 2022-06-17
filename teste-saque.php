<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$cpf = new CPF('123.456.789-99');
$endereco = new Endereco('a', 'b', 'c', '12');
$titular = new Titular($cpf, 'Karol', $endereco);
$conta = new Conta($titular);

$conta->depositar(500);
$conta->Sacar(100);
echo $conta->getSaldo();
