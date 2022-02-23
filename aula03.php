<?php

interface User {

}

class Usuario implements User{

}

class Professor extends Usuario {

}

class Turma{

    private $professor;

    public function setProfessor(Professor $prof){

        $this->professor = $prof;
    }
}

$luiz = new Professor;
$luiz->mudaNome();
echo $luiz->getNome();
$turma = new Turma;
$turma->setProfessor($luiz);