<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Funcionario, CPF};
use Alura\Banco\Servico\ControladorBonificacoes;

$cpf = new CPF('123.456.789-99');

$umFuncionario = 
new Funcionario('Karolina', $cpf, 'Dev', 2000.0);

$doisFuncionario = 
new Funcionario('Thales', $cpf, 'Dev', 5000.0);

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($doisFuncionario);

echo $controlador->getTotal();