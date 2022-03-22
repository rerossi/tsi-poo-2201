<?php

require 'classes/produto.class.php';
require 'classes/estoque.class.php';

//pq criou a classe main? serve para inicializar o código e deixar o código organizado 
//e não deixar ele procedural

class Main {

    private $produto;
    private $estoque;


    public function __construct(){

        $this->produto = new Produto;

        $objProd = $this->produto->criar(['bola']);

        //aqui falo que existe uma dependência de estoque       
        $this->estoque = new Estoque($this->produto);
    }
}

new Main;