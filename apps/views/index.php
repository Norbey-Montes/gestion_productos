<?php
$productos = $productos ?? new class {
    public function getAll(): array
    {
        return [];
    }
};
?>

<h1>Listado Productos</h1>

<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    <?php foreach ($productos->getAll() as $product)?>
    <tr>
        <td><?= $product['nombre'] ?></td>
        <td><?= $product['precio'] ?></td>
        <td><?= $product['categoria'] ?></td>
    </tr>
    <? endforeach; ?>



    ?>
</tabla>