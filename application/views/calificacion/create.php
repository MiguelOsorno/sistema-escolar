<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('calificacion/create'); ?>

    <label for="id_materia">Materia:</label>
    <select name="id_materia">
    <?php foreach ($materias as $materia_item): ?>
        <?php echo '<option value="' . $materia_item['id'] . '">' . $materia_item['nombre'] . '</option>' ?>
    <?php endforeach;?>
    </select>

    <label for="id_maestro">clave/maestro</label>
    <select name="id_maestro">
    <?php foreach ($maestros as $maestro_item): ?>
        <?php echo '<option value="' . $maestro_item['id'] . '">' . $maestro_item['clave'] . " - " . $maestro_item['nombre'] . '</option>' ?>
    <?php endforeach;?>
    </select>

    <label for="id_alumno">Matricula/alumno:</label>
    <select name="id_alumno">
    <?php foreach ($alumnos as $alumno_item): ?>
        <?php echo '<option value="' . $alumno_item['id'] . '">' . $alumno_item['matricula'] . " - " . $alumno_item['nombre'] . '</option>' ?>
    <?php endforeach;?>
    </select>

    <label for="valor">Valor:</label>
    <input type="text" name="valor" /><br />

    <select name="estado">
    <option value="Aprobado">Aprobado</option>
    <option value="reprobado">Reprobado</option>
    </select>

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