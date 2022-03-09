<?php

interface Crud {
    
    public function cadastrar(array $dados): bool;
    public function listar(int $id = null): array;
    public function alterar(int $id, array $dados): bool;
    public function deletar(int $id): bool;
    
    }