<h2><?php echo $title; ?></h2>

<a href="<?php echo site_url('calificacion/create'); ?>">Nueva calificacion</a>

<table style="width:100%">
        <tr>
                <th>materia</th>
                <th>nombre maestro</th>
                <th>nombre alumno</th>
                <th>Valor</th>
                <th>estado</th>
                <th>cuatrimestre</th>
                <th>Acciones</th>
        </tr>
<?php foreach ($calificaciones as $calificacion_item): ?>
        <tr>
                <td><?php echo $calificacion_item['materia_nombre']; ?></td>       
                <td> <?php echo $calificacion_item['maestro_nombre']; ?></td>  
                <td> <?php echo $calificacion_item['alumno_nombre']; ?></td>  
                <td><?php echo $calificacion_item['valor'];?></td>
                <td><?php echo $calificacion_item['estado'];?></td>     
                <td><?php echo $calificacion_item['descripcion'];?></td>
                <td><a href="<?php echo site_url('calificacion/'.$calificacion_item['id']); ?>">Editar</a></td>
                <td><a href="<?php echo site_url('calificacion/delete/'.$calificacion_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
<?php endforeach; ?>
</table>