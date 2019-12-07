<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('clase/edit'); ?>

    <label>Identificador</label>
    <input readonly name="id" value="<?php echo $clase["id"]?>" />

    <label for="id_grupo">Id_grupo:</label>
    <input type="text" value="<?php echo $clase["id_grupo"]?>" name="id_grupo" /><br />

    <label for="id_materia">Id_materia:</label>
    <input type="text"  value="<?php echo $clase["id_materia"] ?>" name="id_materia" /><br />

    <label for="horario">Horario:</label>
    <input type="text"  value="<?php echo $clase["horario"] ?>" name="horario" /><br />

    <label for="id_maestro">Id_maestro:</label>
    <input type="text"  value="<?php echo $clase["id_maestro"] ?>" name="id_maestro" /><br />

    <input type="submit" name="submit" value="Actualizar" />

</form>