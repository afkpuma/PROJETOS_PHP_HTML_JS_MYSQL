<?php

class Funcionario
{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //getter e setters
    function __setNome($nome){
         $this->nome  = $nome;
    }

    function __setNumFilhos($numFilhos){
         $this->numFilhos  = $numFilhos;
    }

    function __getNome(){
        return $this->nome;
        
    }
    function __getNumFilhos(){
        return $this->numFilhos;
        
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
$y->__setNome('Jose');
$y->__setNumFilhos(4);
//echo $y->resumirCardFunc();
echo $y->__getNome() . 'possui' . $y->__getNumFilhos() . 'filhos'; 

echo'<br />';

$x = new Funcionario();
$x->__setNome('Maria');
$x->__setNumFilhos(0);
echo $x->__getNome() . 'possui' . $x->__getNumFilhos() . 'filhos';
