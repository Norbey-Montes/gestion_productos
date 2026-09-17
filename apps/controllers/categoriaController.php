<?php

require_once __DIR__ . '/../models/categoria.php';

class categoriaController {

    public function index() {
        $categoriaModel = new Categoria();

        try {
            $categorias = $categoriaModel->getAll();
        } catch (PDOException $e) {
            echo "Error al cargar las categorías";
            $categorias = []; 
        }

        require_once __DIR__ . '/../views/categorias/index.php';
    }
}