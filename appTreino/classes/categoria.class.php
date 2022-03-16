<?php

class Categoria implements Crud {
    private $id;
    private $nome;

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
