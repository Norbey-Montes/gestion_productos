<!-- 1. Tabla general con foreach -->
<h1>Listado Productos</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Proveedor</th>
    </tr>
    <?php foreach ($productos as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['nombre'] ?></td>
        <td><?= $product['precio'] ?></td>
        <td><?= $product['categoria'] ?></td>
        <td><?= $product['proveedor_nombre'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br><br>


<h1>Producto Consultado</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Proveedor</th>
    </tr>
    <tr>
        <td><?= $productoConsultado['id'] ?></td>
        <td><?= $productoConsultado['nombre'] ?></td>
        <td><?= $productoConsultado['precio'] ?></td>
        <td><?= $productoConsultado['categoria'] ?></td>
        <td><?= $productoConsultado['proveedor_nombre'] ?></td>
    </tr>
</table>