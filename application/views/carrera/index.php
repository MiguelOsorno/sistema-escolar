<h2><?php echo $title;?></h2>
<a href="<?php echo site_url('carrera/create');?>">Nueva carrera</a>

<table style="width:100%">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($carreras as $carrera_item):?>
        <tr>
            <td><?php echo $carrera_item["id"];?><td>
            <td><?php echo $carrera_item["nombre"];?><td>
            <td><a href="<?php echo site_url('carrera/'.$carrera_item['id']);?>">Editar</a></td>
            <td><a href="<?php echo site_url('carrera/delete/'.$carrera_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
    <?php endforeach;?>
</table> 