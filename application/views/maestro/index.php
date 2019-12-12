<h2><?php echo $title; ?></h2>

<a href="<?php echo site_url('maestro/create'); ?>">Nuevo maestro</a>

<table style="width:100%">
        <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Acciones</th>
        </tr>
<?php foreach ($maestros as $maestro_item): ?>
        <tr>
                <td><?php echo $maestro_item['clave']; ?></td>
                <td><?php echo $maestro_item['nombre']; ?></td>
                <td> <?php echo $maestro_item['apellido']; ?></td>
                <td><?php echo $maestro_item['direccion']; ?></td>
                <td><?php echo $maestro_item['telefono']; ?></td>
                <td><a href="<?php echo site_url('maestro/' . $maestro_item['id']); ?>">Editar</a></td>
                <td><a href="<?php echo site_url('maestro/delete/' . $maestro_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
<?php endforeach;?>
</table>