<h2><?php echo $title; ?></h2>

<table style="width:100%">
        <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
        </tr>
<?php foreach ($maestro as $maestro_item): ?>
        <tr>
                <td><?php echo $maestro_item['nombre']; ?></td>       
                <td> <?php echo $maestro_item['apellido']; ?></td>       
                <td><a href="<?php echo site_url('maestro/'.$maestro_item['id']); ?>">Editar</a></td>
        </tr>
<?php endforeach; ?>
</table>