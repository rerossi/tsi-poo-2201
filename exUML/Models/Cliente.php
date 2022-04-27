<?php

chdir(__DIR__);
require_once './Model.php';

class Cliente extends Model
{

    protected string $table;
    
    public function __construct()
    {
        parent::__construct();

        $this->table = 'cliente';
    }

    function inserir(array $dados): ?int
    {
        $stmt = $this->prepare('INSERT INTO cliente
                                (Name, telefone) 
                                VALUES (:nome, :telefone)');

        $stmt->bindParam(':nome', $dados['nome']); 
        $stmt->bindParam(':telefone', $dados['telefone']); 

        if($stmt->execute()){

        return $this->lastInsertId();
    }
    else{

    return false;
    }
        
    }

    function atualizar(int $id, array $dados): bool
    {

        $stmt = $this->prepare("UPDATE cliente
                                SET Name = :nome, telefone = :telefone
                                WHERE
                                id = :id");

         $stmt->bindParam(':id', $id); 
         $stmt->bindParam(':nome', $dados['nome']); 
         $stmt->bindParam(':telefone', $dados['telefone']);
         
         if($stmt->execute()){

            return true;
        }
        else{
    
        return false;
        }
         
    }

    function apagar(int $id): bool
    {
        $stmt = $this->prepare("DELETE FROM cliente
                                WHERE id = :id");

         $stmt->bindParam(':id', $id); 
         
         if($stmt->execute()){

            return true;
        }
        else{
    
        return false;
        }
         
    }
    

    function listar(int $id = null): ?array
    {
        return null;
    }
}

$cliente = new Cliente;

$cliente->apagar(1);