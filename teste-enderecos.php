<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São Paulo', 'Cambuci', 'Rua Jota', '99');
$segundoEndereco = new Endereco('Rio de Janeiro', 'Copacabana', 'Rua final', '81');

//Uso o método toString() para eu nao ter que imprimir assim:
//echo $umEndereco->recuperarRua() . ", " . $umEndereco->recuperarNumero() . ", " ...
//No método __toString() eu já defino essa formatação

//Alternativa correta! Sempre que tentarmos representar um objeto como string 
//(seja com echo, passando por parâmetro ou retornando) o método __toString é procurado,
//e se a classe o tiver, seu retorno é utilizado.
echo $umEndereco . PHP_EOL;
echo $segundoEndereco . PHP_EOL;