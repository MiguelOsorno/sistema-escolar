<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('alumno/edit'); ?>

    <label>Matricula</label>
    <input readonly name="id" value="<?php echo $alumno["id"]?>" />

    <label for="nombre">Nombre:</label>
    <input type="text" value="<?php echo $alumno["nombre"]?>" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text"  value="<?php echo $alumno["apellido"] ?>" name="apellido" /><br />

    <label for="id_grupo">Id_grupo:</label>
    <input type="text"  value="<?php echo $alumno["id_grupo"] ?>" name="id_grupo" /><br />

    <input type="submit" name="submit" value="Actualizar" />

</form>
