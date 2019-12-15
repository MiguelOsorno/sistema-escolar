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


    <label for="cuatrimestre">Cuatrimestre:</label>
    <select name="cuatrimestre">
    <option value="1">Primer cuatrimestre</option>
    <option value="2">segundo cuatrimestre</option>
    <option value="3">tercer cuatrimestre</option>
    <option value="4">cuarto cuatrimestre</option>
    <option value="5">quinto cuatrimestre</option>
    <option value="6">sexto cuatrimestre</option>
    <option value="7">septimo cuatrimestre</option>
    <option value="8">octavo cuatrimestre</option>
    </select>


    <input type="submit" name="submit" value="consultar" />

</form>
</html>
