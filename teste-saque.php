<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$cpf = new CPF('123.456.789-99');
$endereco = new Endereco('a', 'b', 'c', '12');
$titular = new Titular($cpf, 'Karol', $endereco);
$conta = new ContaCorrente($titular);
$conta->depositar(500);
$conta->Sacar(100);
echo $conta->getSaldo();