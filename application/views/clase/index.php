<h2><?php echo $title;?></h2>
<a href="<?php echo site_url('clase/create');?>">Nueva clase</a>

<table style="width:100%">
    <tr>
        <th>Id_grupo</th>
        <th>Id_materia</th>
        <th>Horario</th>
        <th>Id_maestro</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($clases as $clase_item):?>
        <tr>
            <td><?php echo $clase_item["id_grupo"];?><td>
            <td><?php echo $clase_item["id_materia"];?></td>
            <td><?php echo $clase_item["horario"];?></td>
            <td><?php echo $clase_item['id_maestro'];?></td>
            <td><a href="<?php echo site_url('clase/'.$clase_item['id']);?>">Editar</a></td>
            <td><a href="<?php echo site_url('clase/delete/'.$clase_item['id']); ?>" onclick="return confirm('seguro que desea borrar?');">eliminar</a></td>
        </tr>
    <?php endforeach;?>
</table> 