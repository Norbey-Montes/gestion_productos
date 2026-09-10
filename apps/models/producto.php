<?php

require_once __DIR__ . '/../../config/Database.php';

class Producto {

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getAll() {
        $sql = "SELECT 
                    producto.id,
                    producto.nombre, 
                    producto.precio, 
                    categorias.nombre AS categoria, 
                    proveedores.nombre AS proveedor_nombre 
                FROM producto 
                INNER JOIN proveedores ON producto.id_proveedor = proveedores.id
                INNER JOIN categorias ON producto.id_categoria = categorias.id";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT 
                    producto.id,
                    producto.nombre, 
                    producto.precio, 
                    categorias.nombre AS categoria, 
                    proveedores.nombre AS proveedor_nombre 
                FROM producto 
                INNER JOIN proveedores ON producto.id_proveedor = proveedores.id
                INNER JOIN categorias ON producto.id_categoria = categorias.id
                WHERE producto.id = $id";

        $consulta = $this->connection->query($sql);
        return $consulta->fetch(PDO::FETCH_ASSOC); 
    }
}