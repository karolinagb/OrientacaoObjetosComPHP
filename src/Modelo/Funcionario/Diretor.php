<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Autenticavel;

//A gente pode extender de uma única calsse, mas implementar quantas interfaces a gente quiser
//pois não entra no problema do diamante devido herança multipla quando temos dois metodos iguais
//em duas classes mães e com a herença multiplica ficaria complicado saber qual metodo executar
class Diretor extends Funcionario implements Autenticavel
{
   public function calculaBonificacao():float{
      return $this->recuperaSalario() * 2;
   }   

   public function podeAutenticar(string $senha): bool
   {
      return $senha === '1234';
   }
}
