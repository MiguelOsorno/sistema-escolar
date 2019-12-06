<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('alumno/create'); ?>

    <label for="id">Matricula:</label>
    <input type="text" name="id" /><br />

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" /><br />

    <label for="id_grupo">Id_grupo:</label>
    <input type="text" name="id_grupo" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>