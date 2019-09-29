<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('maestro/create'); ?>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>