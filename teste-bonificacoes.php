<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Servico\ControladorBonificacoes;

$cpf = new CPF('123.456.789-99');

$doisFuncionario = 
new Gerente('Thales', $cpf, 5000.0);

$tresFuncionario = 
new Diretor('Thales', $cpf, 5000.0);

$quatroFuncionario = 
new Desenvolvedor('Thales', $cpf, 5000.0);

$quatroFuncionario->sobreDeNivel();

$controlador = new ControladorBonificacoes();
$controlador->adicionaBonificacao($doisFuncionario);
$controlador->adicionaBonificacao($tresFuncionario);
$controlador->adicionaBonificacao($quatroFuncionario);

echo $controlador->getTotal();