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

 public function __construct(){

     echo "construtor usuario";
     return true;  

}

 public function criar(array $dados): bool {
   echo "\n Criado Perfil";
   return true;
}

public function apagar(int $id): bool {
    echo "\n Apagado Perfil";
    return true;
}

public function editar(int $id, array $dados): bool {
    echo "\n Editado Perfil $id";
    return true;
}

public function listar(int $id = null): array{
    echo "\n Listado Perfil";
    return [];
}

public function acao(array $idProdutos): bool{
    echo "Ação genérica para usuários";
    return true;
}

}




