<?php

chdir(__DIR__);
require_once '../Models/Cliente.php';
require_once '../Config/bd.php';

$nome = $_POST['nome'];
$tel = $_POST['telefone'];

$stmt = $bd->prepare('  INSERT INTO Cliente (name, telefone)
                        VALUES (:nome, :telefone)');

$valores[':nome'] = $_POST['nome'];
$valores[':telefone'] = $_POST['telefone'];

if ($stmt->execute($valores)) {
    echo "<br> Dados gravados com sucesso! <br>";
} else {
    echo "<br> Dados nao gravados com sucesso :/";
}