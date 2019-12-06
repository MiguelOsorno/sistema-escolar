<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('calificacion/create'); ?>

    <label for="id_materia">Id_materia:</label>
    <input type="text" name="id_materia" /><br />

    <label for="id_alumno">Id_alumno:</label>
    <input type="text" name="id_alumno" /><br />

    <label for="id_maestro">Id_maestro:</label>
    <input type="text" name="id_maestro" /><br />

    <label for="valor">Valor:</label>
    <input type="text" name="valor" /><br />

    <label for="estado">Estado:</label>
    <input type="text" name="estado" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>