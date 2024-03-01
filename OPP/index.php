<?php

class Calc
{
    public $a = 10;
    public $b = 7;
    public $operador = 'soma';

    public function calcular(){
        if($this->operador == 'soma'){
            return $this->a + $this->b;
        }
        return false;
    }
}

$calc = New Calc;

$resultado = $calc->calcular();

echo $resultado;
?>
