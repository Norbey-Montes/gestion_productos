    <?php

    require_once __DIR__ . '/../models/producto.php';

    class productoControllers {

        public function index() {
            $productoModel = new Producto();
            
            try {
                $productos = $productoModel->getAll();
            } catch (PDOException $e) {
                echo "Error al cargar productos";
            }

            try {
                $productoConsultado = $productoModel->getById("5");

                } catch (PDOException $e) {
                    echo "Error al cargar los productos: ";
                }
                require_once __DIR__ . '/../views/productos/index.php';
            }
        }
