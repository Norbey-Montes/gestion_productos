<?php

require_once __DIR__ . '/../models/cliente.php';

class ClienteController {
    public function index() {
        $clienteModel = new Cliente();
        $clientes = $clienteModel->getAll();

        // RUTA ACTUALIZADA
        require_once __DIR__ . '/../views/clientes/index.php';
    }
}