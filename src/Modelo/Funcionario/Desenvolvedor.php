<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
   public function sobreDeNivel(): void
   {
      $this->aumentarSalario($this->recuperaSalario() * 0.75);
   }
}   

