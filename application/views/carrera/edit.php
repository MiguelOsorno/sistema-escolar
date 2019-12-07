<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('carrera/edit'); ?>

    <label>Identificador</label>
    <input readonly name="id" value="<?php echo $carrera["id"]?>" />

    <label for="nombre">Nombre:</label>
    <input type="text" value="<?php echo $carrera["nombre"]?>" name="nombre" /><br />

    <input type="submit" name="submit" value="Actualizar" />

</form>