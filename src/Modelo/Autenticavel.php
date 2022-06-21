<?php

namespace Alura\Banco\Modelo;

//Uma interface é uma classe abstrata com todos os métodos abstratos
//Agora temos um contrato que força que alguém implemente esses métodos
interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
