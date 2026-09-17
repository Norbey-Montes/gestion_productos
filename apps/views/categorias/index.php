<h1>Listado Categorías</h1>

<?php if (!empty($categorias)) { ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </tr>
        <?php foreach ($categorias as $cat): ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= $cat['nombre'] ?></td>
            <td><?= $cat['descripcion'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
    <p>No hay categorías para mostrar.</p>
<?php } ?>