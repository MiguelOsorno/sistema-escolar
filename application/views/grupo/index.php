<h2><?php echo $title; ?></h2>
<a href="<?php echo site_url('grupo/create'); ?>">Nuevo grupo</a>

<table style="width:100%">
    <tr>
        <th>Letra</th>
        <th>modalidad</th>
        <th>Carrera</th>
        <th>Ciclo escolar</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($grupos as $grupo_item): ?>
        <tr>
            <td><?php echo $grupo_item["letra"]; ?></td>
            <td><?php echo $grupo_item["modalidad"]; ?></td>
            <td><?php echo $grupo_item["nombre"]; ?></td>
            <td><?php echo $grupo_item["cicloEscolar"]; ?></td>
            <td><a href="<?php echo site_url('grupo/' . $grupo_item['id']); ?>">Editar</a></td>
            <td><a href="<?php echo site_url('grupo/delete/' . $grupo_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
    <?php endforeach;?>
</table>