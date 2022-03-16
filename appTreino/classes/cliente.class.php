<?php

chdir(__DIR__);
require_once 'usuario.class.php';
require_once '../interfaces/usuario.interface.php';

class Cliente extends Usuario implements iUsuario {

    public function __construct(){

        parent::__construct();
        echo " construtor cliente";

    }


    public function acao(array $idProdutos):bool{

        echo "Executou açao do cliente";
        return true;
    }
}
