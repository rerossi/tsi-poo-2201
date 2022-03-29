<?php

require 'classes/cliente.class.php';

//class main serve para inicializar o código e deixar o código organizado 
//e não deixar ele procedural

class Main {

    private $cliente;


    public function __construct(){

        $this->cliente = new Cliente;

        $this->cliente->acao([]);

        $this->cliente->executaXPTO();
    }
}

new Main;