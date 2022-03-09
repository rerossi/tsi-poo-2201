<?php

class Sessao {

    private $id;
    private $id_usuario;
    private $dispositivo;
    private $localizacao;
    private $lastupdate;

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