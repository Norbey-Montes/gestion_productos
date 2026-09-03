<?php

require_once __DIR__ . '/../models/producto.php';

class productoControllers {
    public function index() {
        $producto = new Producto();
        $productos = $producto->getAll();

        // RUTA ACTUALIZADA
        require_once __DIR__ . '/../views/productos/index.php';
    }
}