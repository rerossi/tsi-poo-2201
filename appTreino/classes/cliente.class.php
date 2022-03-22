<?php

chdir(__DIR__);
require_once 'usuario.class.php';
require_once '../interfaces/usuario.interface.php';

class Cliente extends Usuario implements iUsuario {

    public function __construct(){

        //deixa explicito a chamada da classe Usuario, sendo assim será executado 
        //o método chamado em outro arquivo
        parent::__construct();
        echo " construtor da classe cliente";

    }


    public function acao(array $idProdutos):bool{

        echo "Executou açao do cliente";
        return true;
    }

    public function executaXPTO(){
        $this->xpto();
    }
}
