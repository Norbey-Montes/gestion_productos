<h1>Listado Proveedores</h1>

<?php if (!empty($proveedores)) { ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Dirección</th>
        </tr>
        <?php foreach ($proveedores as $proveedor): ?>
        <tr>
            <td><?= $proveedor['id'] ?></td>
            <td><?= $proveedor['nombre'] ?></td>
            <td><?= $proveedor['ciudad'] ?></td>
            <td><?= $proveedor['direccion'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
    <p>No hay proveedores para mostrar.</p>
<?php } ?>