<?php
require_once __DIR__ . "/../apps/controllers/productoControllers.php";

$productoController = new productoControllers();
$productoController->index();