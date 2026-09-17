<?php

require_once __DIR__ . '/../models/proveedor.php';

class ProveedorController {

    public function index() {
        $proveedorModel = new Proveedor();

        try {
            $proveedores = $proveedorModel->getAll();
        } catch (PDOException $e) {
            echo "Error al cargar los proveedores: ";
        }

        require_once __DIR__ . '/../views/proveedores/index.php';
    }
}