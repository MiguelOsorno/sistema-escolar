<h2><?php echo $title?></h2>
<table style='width:100%'>
  <tr>
    <th>Docente</th>
    <th>Materia</th>
    <th>Calificacion</th>
    <th>Estado</th>
    <th>nombre</th>
    <th>apellido</th>
  </tr>
  <?php foreach ($calificaciones as $calificacion):?>
        <tr>
            <td><?php echo $calificacion['maestro_nombre'];?></td>
            <td><?php echo $calificacion['materia_nombre'];?></td>
            <td><?php echo $calificacion['valor'];?></td>
            <td><?php echo $calificacion['estado'];?></td>
            <td><?php echo $calificacion['alumno_nombre'];?></td>
            <td><?php echo $calificacion['apellido'];?></td>
        </tr>
    <?php endforeach;?>
</table>