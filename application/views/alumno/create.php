<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('alumno/create'); ?>

    <label for="id">Matricula:</label>
    <input type="text" name="id" /><br />

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" /><br />

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

    <input type="submit" name="submit" value="Crear" />

</form>