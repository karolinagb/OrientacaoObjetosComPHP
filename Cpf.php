<?php

class CPF{
    private string $numero;

    public function __construct(string $numero){
        $this->validaCpf($numero);
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    private function validaCpf(string $numero){
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP,
        [
            'options' => 
            [
                'regexp' => '/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/'
            ]
        ]);

        if($numero == false){
            echo "CPF inválido!";
            exit();
        }
    }
}