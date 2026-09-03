<?php

require_once __DIR__ . "/../apps/controllers/productoControllers.php";
require_once __DIR__ . "/../apps/controllers/clienteController.php";


$productoController = new productoControllers();
$productoController->index();

echo "<br><br>";


$clienteController = new ClienteController();
$clienteController->index();