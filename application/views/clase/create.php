<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clase/create'); ?>

    <label for="id">Identificador:</label>
    <input type="text" name="id" /><br />

    <label for="id_grupo">Id_grupo:</label>
    <input type="text" name="id_grupo" /><br />

    <label for="id_materia">Id_materia:</label>
    <input type="text" name="id_materia" /><br />

    <label for="horario">Horario:</label>
    <input type="text" name="horario" /><br />

    <label for="id_maestro">Id_maestro:</label>
    <input type="text" name="id_maestro" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>