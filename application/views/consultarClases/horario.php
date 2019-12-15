<h2><?php echo $title; ?></h2>

<?php if (count($clases) == 0) {
    echo "<p>no hay horario asignado para este grupo</p>";
}
;?>

<table style="width:100%">
    <tr>
        <th>Horario</th>
        <th>maestro</th>
        <th>Materia</th>
        <th>grupo</th>
        <th>carrera</th>
        <th>cuatrimestre</th>
    </tr>


    <?php foreach ($clases as $clase_item): ?>
        <tr>
            <td><?php echo $clase_item["horario"]; ?></td>
            <td><?php echo $clase_item["maestro_nombre"]; ?></td>
            <td><?php echo $clase_item["materia_nombre"]; ?></td>
            <td><?php echo $clase_item["letra"]; ?></td>
            <td><?php echo $clase_item["carrera_nombre"]; ?></td>
            <td><?php echo $clase_item["descripcion"]; ?></td>
        </tr>
    <?php endforeach;?>
</table>
