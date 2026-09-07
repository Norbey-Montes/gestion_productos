<?php

require_once __DIR__ . "/../apps/controllers/productoControllers.php";
require_once __DIR__ . "/../apps/controllers/clienteController.php";
require_once __DIR__ . "/../apps/controllers/proveedorController.php";

// Renderizar Productos
$productoController = new productoControllers();
$productoController->index();

echo "<br><br>";

// Renderizar Clientes
$clienteController = new clienteController();
$clienteController->index();

echo "<br><br>";

// Renderizar Proveedores
$proveedorController = new proveedorController();
$proveedorController->index();