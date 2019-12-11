<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('maestro/create'); ?>

    <label for="id">Clave:</label>
    <input type="text" name="id" /><br />

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" /><br />

    <label for="direccion">Direccion:</label>
    <input type="text" name="direccion" /><br />

    <label for="telefono">Telefono:</label>
    <input type="text" name="telefono" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>