<?php

require_once __DIR__ . '/../models/cliente.php';

class ClienteController {
    public function index() {
        $clienteModel = new Cliente();
        $clientes = $clienteModel->getAll();
        
        require_once __DIR__ . '/../views/index1.php';
    }
}