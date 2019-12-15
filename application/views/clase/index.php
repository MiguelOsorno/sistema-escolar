<h2><?php echo $title; ?></h2>
<a href="<?php echo site_url('clase/create'); ?>">Nueva clase</a>

<table style="width:100%">
    <tr>
        <th>Grupo</th>
        <th>carrera</th>
        <th>Materia</th>
        <th>Horario</th>
        <th>Maestro</th>
        <th>Cuatrimestre</th>
        <th>Acciones</th>

    </tr>

    <?php foreach ($clases as $clase_item): ?>
            <td><?php echo $clase_item["letra"]; ?></td>
            <td><?php echo $clase_item["carrera_nombre"]; ?></td>
            <td><?php echo $clase_item['materia_nombre']; ?></td>
            <td><?php echo $clase_item['horario']; ?></td>
            <td><?php echo $clase_item['maestro_nombre']; ?></td>
            <td><?php echo $clase_item['descripcion']; ?></td>
            <td><a href="<?php echo site_url('clase/' . $clase_item['id']); ?>">Editar</a></td>
            <td><a href="<?php echo site_url('clase/delete/' . $clase_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
    <?php endforeach;?>


</table>