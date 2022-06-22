<?php

//Não é obrigatório, mas é interessante colocar o nome do namespace igual o nome da pasta
// Alura\Banco\   = namespace raiz, isso deixa o namespace mais único do meu projeto pois pode haver
//classes que eu baixe da internet com nomes e até namespaces iguais
namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;
    
    //protected = só as classes filhas podem acessar
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getCpf() : string
    {
        return $this->cpf->getNumero();
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    //final = no metodo proibe que as classes filhas o alterem/sobrescrevam
    final protected function validaNome($nome){
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
