<?php

require 'classes/produto.class.php';

class Main{

    private $produto;

    public function __construct(){

        $this->produto = new Produto;

        $vetor = [];

        $this->novo($vetor);
    }

    function novo($vetor):void{
        //função php is_array, retorna true ou false
        if(is_array($vetor)){

        $this->produto->criar($vetor); 
        }else{
            throw 'Erro';
        }

        

    }
    

    public function __destruct(){

        echo "\nDestrutor Executado\n";
    }


}

$main = new Main;
sleep(2);

/*
$bola = new Produto;
$bola->criar(['olá']);
$bola->apagar(1);
$bola->listar(1);
$bola->editar(1, [1]);
$bola->acao([1]);
*/
