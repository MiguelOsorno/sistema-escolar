<h2><?php echo $title; ?></h2>

<a href="<?php echo site_url('materia/create'); ?>">Nueva materia</a>

<table style="width:100%">
        <tr>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Acciones</th>
        </tr>
<?php foreach ($materias as $materia_item): ?>
        <tr>
                <td><?php echo $materia_item['id']; ?></td> 
                <td><?php echo $materia_item['nombre']; ?></td>       
                <td><a href="<?php echo site_url('materia/'.$materia_item['id']); ?>">Editar</a></td>
                <td><a href="<?php echo site_url('materia/delete/'.$materia_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
<?php endforeach; ?>
</table>