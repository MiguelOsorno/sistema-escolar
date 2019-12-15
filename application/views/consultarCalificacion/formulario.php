<html>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('consultarCalificacion/formulario'); ?>

    <label for="matricula">Matricula:</label>
    <select name="matricula">
    <?php foreach ($alumnos as $alumno_item): ?>
        <?php echo '<option value="' . $alumno_item['matricula'] . '">' . $alumno_item['matricula'] . " - " . $alumno_item['nombre'] . '</option>' ?>
    <?php endforeach;?>
    </select>

    <input type="submit" name="submit" value="consultar" />

</form>
</html>
