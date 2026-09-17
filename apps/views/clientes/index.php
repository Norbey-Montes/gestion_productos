<h1>Listado Clientes</h1>

<?php if (!empty($clientes)) { ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Teléfono</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= $cliente['nombre'] ?></td>
            <td><?= $cliente['documento'] ?></td>
            <td><?= $cliente['correo'] ?></td>
            <td><?= $cliente['telefono'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
    <p>No hay clientes para mostrar.</p>
<?php } ?>