<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('materia/create'); ?>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" /><br />


    <input type="submit" name="submit" value="Crear" />

</form>