<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('carrera/create'); ?>

    <label for="id">Identificador:</label>
    <input type="text" name="id" /><br />

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" /><br />
    
    <input type="submit" name="submit" value="Crear" />

</form>