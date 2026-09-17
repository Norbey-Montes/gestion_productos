<?php

require_once __DIR__ . '/../../config/Database.php';

class Producto
{
    private $connection;

    public function __construct()
    {
        try {
            $database = new Database();
            $this->connection = $database->connect();
        } catch (PDOException $e) {
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT 
                        producto.id,
                        producto.nombre, 
                        producto.precio, 
                        categorias.nombre AS categoria, 
                        categorias.descripcion AS descripcion, 
                        proveedores.nombre AS proveedor_nombre,
                        proveedores.ciudad AS ciudad
                    FROM product  
                    INNER JOIN proveedores ON producto.id_proveedor = proveedores.id
                    INNER JOIN categorias ON producto.id_categoria = categorias.id";

            $consulta = $this->connection->query($sql);
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return []; 
        }
    }

    public function getById($id)
    {
        
            $sql = "SELECT * FROM product 
            WHERE id = :id";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        
    }
}