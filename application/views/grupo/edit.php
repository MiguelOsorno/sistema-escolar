<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('grupo/edit'); ?>

    <label>ID</label>
    <input readonly name="id" value="<?php echo $grupo["id"]?>" />

    <label for="grado">Grado:</label>
    <input type="text" value="<?php echo $grupo["grado"]?>" name="grado" /><br />

    <label for="letra">Letra:</label>
    <input type="text"  value="<?php echo $grupo["letra"] ?>" name="letra" /><br />

    <label for="turno">Turno:</label>
    <input type="text"  value="<?php echo $grupo["turno"] ?>" name="turno" /><br />

    <label for="carrera">Carrera:</label>
    <input type="text"  value="<?php echo $grupo["carrera"] ?>" name="carrera" /><br />

    <input type="submit" name="submit" value="Actualizar" />

</form>