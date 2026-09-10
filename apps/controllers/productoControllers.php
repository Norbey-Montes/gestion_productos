<?php

require_once __DIR__ . '/../models/producto.php';

class productoControllers {
    public function index() {
        $productoModel = new Producto();

        $productos = $productoModel->getAll();

        $productoConsultado = $productoModel->getById(5);

        require_once __DIR__ . '/../views/productos/index.php';
    }
}