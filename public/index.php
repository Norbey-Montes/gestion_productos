<?php

require_once __DIR__ . "/../apps/controllers/productoControllers.php";
require_once __DIR__ . "/../apps/controllers/clienteController.php";
require_once __DIR__ . "/../apps/controllers/proveedorController.php";
require_once __DIR__ . "/../apps/controllers/categoriaController.php";


$productoController = new productoControllers();
$productoController->index();

echo "<br><br>";

$clienteController = new clienteController();
$clienteController->index();

echo "<br><br>";


$proveedorController = new proveedorController();
$proveedorController->index();

echo "<br><br>";


$categoriaController = new categoriaController();
$categoriaController->index();