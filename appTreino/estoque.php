<?php

require 'classes/produto.class.php';
require 'classes/estoque.class.php';


class Main {

    private $produto;
    private $estoque;


    public function __construct(){

        $this->produto = new Produto;
    }
}
