<?php

interface User {

    public function seLogar();
    public function apagar();

}

class Usuario implements User{

    protected $nome = 'Rodrigo';
    private $email;
    private $nasc;

    public function seLogar(){

        echo "Logado";
    }

    public function seDeslogar(){

        echo "Deslogado";
    }

    public function setNome($valor){

        $this->nome = $valor;
    }

    public function getNome(){

        return $this->nome;
    }

}

class Professor extends Usuario {

    public function mudaNome(){

        $this->nome = 'Rossi';
    }


}

class Turma{

    private $professor;

    public function setProfessor(Professor $prof){

        $this->professor = $prof;
    }
}

$rodrigo = new Professor;
$rodrigo->mudaNome();
echo $rodrigo->getNome();

$turma = new Turma;
$turma->setProfessor($rodrigo);