<?php

require_once __DIR__ . '/../../models/producto.php';

class productoControllers{
    public function index(){
        $producto = new Producto();
        $producto->getAll();
        require_once __DIR__ . '/../views/producto/index.php';

    }
}