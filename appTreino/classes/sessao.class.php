<?php

class Sessao {

    private $id_usuario;
    private $dispositivo;
    private $localizacao;
    private $lastAction;


    public function login(){

        echo 'Login efetuado';
    }

    public function destruir(){

        echo 'sessão destruida';
    }

    public function logout(){

        echo 'Logout efetuado';
    }

    public function atualizar(){

        echo 'sessão atualizada';
    }
}