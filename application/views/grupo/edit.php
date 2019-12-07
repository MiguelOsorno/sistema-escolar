<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('grupo/edit'); ?>

    <label>Identificador</label>
    <input readonly name="id" value="<?php echo $grupo["id"]?>" />

  

    <label for="letra">Letra:</label>
    <input type="text"  value="<?php echo $grupo["letra"] ?>" name="letra" /><br />

    <label for="turno">Turno:</label>
    <input type="text"  value="<?php echo $grupo["turno"] ?>" name="turno" /><br />

    <label for="id_carrera">Id_carrera:</label>
    <input type="text"  value="<?php echo $grupo["id_carrera"] ?>" name="id_carrera" /><br />

    <input type="submit" name="submit" value="Actualizar" />

</form>