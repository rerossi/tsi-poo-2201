<?php

include 'interface.php';

Class Produto implements Crud{

    private $nome;
    private $descricao;
    private $preco;
   
    public function cadastrar(){
   
       echo "produto cadastrado com sucesso";
    }
   
    public function listar(){
   
       echo "produto listado com sucesso";
    }
   
    public function alterar(){
   
       echo "Produto alterado com sucesso";
    }
   
    public function deletar(){
   
       echo "Produto deletado com sucesso";
    }
   
   }

   $bola = new Produto;
   $bola->alterar();

