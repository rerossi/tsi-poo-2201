<?php
chdir(__DIR__);
require_once '../interfaces/crud.interface.php';
require_once '../interfaces/usuario.interface.php';

Class Usuario implements Crud, iUsuario{
 private $id;  
 private $nome;
 private $email;
 private $senha;
 private $id_perfil;

 public function cadastrar(array $dados):bool{

    echo "produto cadastrado com sucesso";
 }

 public function listar(int $id = null):array{

    echo "produto listado com sucesso";
 }

 public function alterar(int $id, array $dados):bool{

    echo "Produto alterado com sucesso";
 }

 public function deletar(int $id):bool{

    echo "Produto deletado com sucesso";
 }

 public function acao(array $idProdutos):bool{


 }

}

$rodrigo = new Usuario;
$rodrigo->cadastrar();
$rodrigo->listar();
$rodrigo->alterar();
$rodrigo->deletar();


