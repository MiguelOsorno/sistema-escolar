<html>

<head>
  <title>Consulta Alumno</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "miguel", "miguelangel12345", "SistemaEscolar") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, " select maestro.nombre, materia.nombre, calificacion.valor,calificacion.estado,alumno.nombre,alumno.apellido
  from (((calificacion
  inner join alumno ON calificacion.id_alumno = alumno.id) 
  inner join materia ON calificacion.id_materia = materia.id)
  inner join maestro ON calificacion.id_maestro = maestro.id)
  where Calificacion.id_alumno=".$_REQUEST['id']) or
    die("Problemas en el select:" . mysqli_error($conexion));

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<th>Docente</th>";
    echo "<th>Materia</th>";
    echo "<th>Calificacion</th>";
    echo "<th>Estado</th>";
    echo "<th>nombre</th>";
    echo "<th>apellido</th>";
    echo "</tr>";
  while ($reg = mysqli_fetch_array($registros)) {
    echo "<tr>";
    echo "<td>".$reg[0]."</td>";
    echo "<td>". $reg[1] . "</td>";
    echo "<td>". $reg[2] . "</td>";
    echo "<td>". $reg[3] ."</td>";
    echo "<td>". $reg[4]."</td>";
    echo "<td>".$reg[5]."</td>";
    echo "</tr>";
  }
  echo "</table>";

  mysqli_close($conexion);
  ?>
</body>

</html>