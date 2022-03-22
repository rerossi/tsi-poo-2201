<?php

require 'classes/cliente.class.php';


class Main {

    private $cliente;


    public function __construct(){

        $this->cliente = new Cliente;

        $this->cliente->acao([]);

        $this->cliente->executaXPTO();
    }
}

new Main;