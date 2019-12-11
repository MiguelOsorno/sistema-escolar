<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('maestro/edit'); ?>

    <label>Clave</label>
    <input readonly name="id" value="<?php echo $maestro["id"]?>" />

    <label for="nombre">Nombre:</label>
    <input type="text" value="<?php echo $maestro["nombre"]?>" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text"  value="<?php echo $maestro["apellido"] ?>" name="apellido" /><br />

    <label for="direccion">Direccion:</label>
    <input type="text"  value="<?php echo $maestro["direccion"] ?>" name="direccion" /><br />

    <label for="telefono">Telefono:</label>
    <input type="text"  value="<?php echo $maestro["telefono"] ?>" name="telefono" /><br />

    <input type="submit" name="submit" value="Actualizar" />

</form>

        
   

