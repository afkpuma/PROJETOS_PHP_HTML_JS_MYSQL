<?php

class Funcionario
{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getter e setters
    //overloading
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }


    //metodos
    function resumirCardFunc()
    {
        return "$this->nome possui $this->numFilhos Filhos";
    }

    function modificarNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }
}

$y = new Funcionario();
$y->__set('nome', 'jose');
$y->__set('numFilhos', 2);
$y->__set('cargo', 'programador');
$y->__set('salario', 'R$3.500');

//echo $y->resumirCardFunc();
echo $y->__get('nome ') . 'possui' . $y->__get('numFilhos') . 'filhos';

echo '<br />';

$x = new Funcionario();
$x->__set('nome', 'Maria');
$x->__set('numFilhos', 0);
echo $x->__get('nome') . 'possui' . $x->__get('numFilhos') . 'filhos';
