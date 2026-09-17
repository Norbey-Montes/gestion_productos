<?php

require_once __DIR__ . '/../../config/Database.php';

class Categoria
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
        // Al no tener try-catch aquí, PDOException viaja hasta el controlador
        $sql = "SELECT id, nombre, descripcion FROM categoria";

        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM categorias 
        WHERE id = :id";

        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}