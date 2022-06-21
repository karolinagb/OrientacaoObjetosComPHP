<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

//Sempre que estender um funcionario, tem que criar uma bonificacao
//Para isso definimos o método com abstract na classe mãe
class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float{
        return 600.0;
    }
}
