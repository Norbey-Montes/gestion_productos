<?php

require_once __DIR__ . '/../models/producto.php';

class productoControllers{
    public function index(){
        $producto = new Producto();
        $productos= $producto->getAll();
     
        require_once __DIR__ . '/../views/index.php';

    }
}