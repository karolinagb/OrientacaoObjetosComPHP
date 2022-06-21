<?php

// A separação de namespaces no php é usando contra barra
namespace Alura\Banco\Modelo\Conta; 

//Usar a classe Pessoa do namespace especificado
//Isso tem que estar fora e antes de tudo
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Autenticavel;

//Titular herda de Pessoa
class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, $nome, Endereco $endereco){
        //Chamando o construtor da classe mãe
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function GetEndereco(Endereco $endereco): Endereco
    {
        return $this->endereco;
    }
    
    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}