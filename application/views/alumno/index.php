<h2><?php echo $title;?></h2>
<a href="<?php echo site_url('alumno/create');?>">Nuevo alumno</a>

<table style="width:100%">
    <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cuatrimestre</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($alumnos as $alumno_item):?>
        <tr>
            <td><?php echo $alumno_item['id'];?></td>
            <td><?php echo $alumno_item["nombre"];?><td>
            <td><?php echo $alumno_item["apellido"];?></td>
            <td><?php echo $alumno_item["descripcion"];?></td>
            <td><a href="<?php echo site_url('alumno/'.$alumno_item['id']);?>">Editar</a></td>
            <td><a href="<?php echo site_url('alumno/delete/'.$alumno_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
    <?php endforeach;?>
</table> 