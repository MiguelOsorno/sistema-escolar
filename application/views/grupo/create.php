<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('grupo/create'); ?>

     <label for="id">Identificador:</label>
    <input type="text" name="id" /><br />

    <label for="grado">Grado:</label>
    <input type="text" name="grado" /><br />

    <label for="letra">letra:</label>
    <input type="text" name="letra" /><br />

    <label for="turno">Turno:</label>
    <input type="text" name="turno" /><br />

    <label for="id_carrera">Id_carrera:</label>
    <input type="text" name="id_carrera" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>