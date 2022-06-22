<?php

namespace Alura\Banco\Modelo;

//trait = permite a reutilização de códigos injetando em outras classes
trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        //Pegar o parametro passado e chamar o metodo correspondente

        //ucfirst = coloca letra maiuscula na primeira letra
        //Concatenando com o nome do metodo
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}