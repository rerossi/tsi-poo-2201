<?php

chdir(__DIR__);
require_once './Model.php';

class Ativo extends Model
{
    protected string $table;

    public function __construct()
    {
        parent::__construct();

        $this->table = 'ativos';

        
    }

    function inserir (array $dados): ?int
    {
        //preparar consulta 
        $stmt =  $this-> prepare(" INSERT INTO ativos
                                        (nome)
                                 VALUES
                                        (:nome)");
        
        $stmt->bindParam(':nome', $dados['nome']);
 

        if($stmt->execute()){

            return $this->lastInsertId();

        } else {
            return false;
        }
    }

    function atualizar(int $id, array $dados): bool
    {
        $stmt = $this->prepare("UPDATE ativos
                                SET nome = :nome
                                WHERE id = :id");

        $stmt->bindParam(':id', $id); 
        $stmt->bindParam(':nome', $dados['nome']); 


        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }     
    }

    function listar (int $id = null):?array
    {
        if($id) {

        $stmt = $this->prepare('SELECT id, nome FROM ativos WHERE id = :id');

        $stmt->bindParam(':id', $id);

        }else{
            $stmt = $this->prepare("SELECT id, nome  FROM ativos");
        }

        $stmt->execute();

        $lista =[];
        
        while($registro = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            
            $lista[] = $registro;
        }

        return $lista;
    }

}


