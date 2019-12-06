<h2><?php echo $title; ?></h2>

<a href="<?php echo site_url('calificacion/create'); ?>">Nueva calificacion</a>

<table style="width:100%">
        <tr>
                <th>Id_materia</th>
                <th>id_alumno</th>
                <th>id_maestro</th>
                <th>Valor</th>
                <th>estado</th>
                <th>Acciones</th>
        </tr>
<?php foreach ($calificaciones as $calificacion_item): ?>
        <tr>
                <td><?php echo $calificacion_item['id_materia']; ?></td>       
                <td> <?php echo $calificacion_item['id_alumno']; ?></td>  
                <td> <?php echo $calificacion_item['id_maestro']; ?></td>  
                <td><?php echo $calificacion_item['valor'];?></td>
                <td><?php echo $calificacion_item['estado'];?></td>     
                <td><a href="<?php echo site_url('calificacion/'.$calificacion_item['id']); ?>">Editar</a></td>
                <td><a href="<?php echo site_url('calificacion/delete/'.$calificacion_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
<?php endforeach; ?>
</table>