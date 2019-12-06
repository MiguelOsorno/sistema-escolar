<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('materia/edit'); ?>

    <label>Clave</label>
    <input readonly name="id" value="<?php echo $materia["id"]?>" />

    <label for="nombre">Nombre:</label>
    <input type="text" value="<?php echo $materia["nombre"]?>" name="nombre" /><br />

   

    <input type="submit" name="submit" value="Actualizar" />

</form>