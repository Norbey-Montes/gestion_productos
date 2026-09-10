<?php

require_once __DIR__ . '/../models/categoria.php';

class categoriaController {

    public function index() {
        $categoriaModel = new Categoria();
        $categorias = $categoriaModel->getAll();

        require_once __DIR__ . '/../views/categorias/index.php';
    }
}