<?php

require_once __DIR__ . '/../models/proveedor.php';

class ProveedorController {
    public function index() {
        $proveedorModel = new Proveedor();
        $proveedores = $proveedorModel->getAll();

        require_once __DIR__ . '/../views/proveedores/index.php';
    }
}