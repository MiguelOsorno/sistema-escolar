<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('maestro/edit'); ?>

    <label>ID</label>
    <input readonly name="id" value="<?php echo $maestro["id"]?>" />

    <label for="nombre">Nombre:</label>
    <input type="text" value="<?php echo $maestro["nombre"]?>" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text"  value="<?php echo $maestro["apellido"] ?>" name="apellido" /><br />

    <input type="submit" name="submit" value="Actualizar" />

</form>

        
   

