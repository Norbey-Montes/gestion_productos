<h1>Listado Productos</h1>

<table border ="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    <?php foreach ($productos as $product):?>
    <tr>
        <td><?= $product['nombre'] ?></td>
        <td><?= $product['precio'] ?></td>
        <td><?= $product['categoria'] ?></td>
    </tr>
    <?php endforeach; ?>

   
</table>