<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('alumno/edit'); ?>

    <label>Matricula</label>
    <input readonly name="id" value="<?php echo $alumno["id"]?>" />

    <label for="nombre">Nombre:</label>
    <input type="text" value="<?php echo $alumno["nombre"]?>" name="nombre" /><br />

    <label for="apellido">Apellido:</label>
    <input type="text"  value="<?php echo $alumno["apellido"] ?>" name="apellido" /><br />

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


    <input type="submit" name="submit" value="Actualizar" />

</form>
