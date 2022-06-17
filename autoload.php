<?php

//Registrar uma função que faz autoload de classes
//Essa funcao recebe outra funcao como parametro
//A funcao de dentro recebe um parametro que e uma string
//Quando instancio uma classe ele verica que tem uma funcao autoloader e executa o que tem dentro dela
spl_autoload_register(function (string $nomeCompletoDaClasse)
{
    //Transformar isso Alura\Banco\Modelo\Endereco  - nome da classe com namespace
    //em src/Modelo/Endereco.php - nome local do arquivo
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);

    //troca para o separador do sistema operacional atual
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);

    //Adiciona no final o .php
    //O ponto é para concatenar (como o + é usado para somar)
    $caminhoArquivo .= '.php';

    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    };
});