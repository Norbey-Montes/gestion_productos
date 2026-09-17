<?php

require_once __DIR__ . '/../models/cliente.php';

class ClienteController {

    public function index() {
        $clienteModel = new Cliente();

        try {
            $clientes = $clienteModel->getAll();
        } catch (PDOException $e) {
            echo "Error al cargar los clientes: ";
        }

        require_once __DIR__ . '/../views/clientes/index.php';
    }
}