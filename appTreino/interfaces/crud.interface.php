<?php

interface Crud {
    
    public function criar(array $dados): bool;
    public function listar(int $id = null): array;
    public function editar(int $id, array $dados): bool;
    public function apagar(int $id): bool;
    
    }