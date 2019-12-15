<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clase/create'); ?>

    <label for="id_materia">Materia:</label>
    <select name="id_materia">
    <?php foreach ($materias as $materia_item): ?>
        <?php echo '<option value="' . $materia_item['id'] . '">' . $materia_item['nombre'] . '</option>' ?>
    <?php endforeach;?>
    </select>
    <label for="id_maestro">Maestro:</label>
    <select name="id_maestro">
    <?php foreach ($maestros as $maestro_item): ?>
        <?php echo '<option value="' . $maestro_item['id'] . '">' . $maestro_item['nombre'] . '</option>' ?>
    <?php endforeach;?>
    </select>

    <label for="id_grupo">Grupo:</label>
    <select name="id_grupo">
    <?php foreach ($grupos as $grupo_item): ?>
        <?php echo '<option value="' . $grupo_item['id'] . '">' . $grupo_item['letra'] . " - " . $grupo_item['modalidad'] . " - " . $grupo_item['nombre'] . " - " . $grupo_item['cicloEscolar'] . '</option>' ?>
    <?php endforeach;?>
    </select>


    <label for="horario">Horario:</label>
    <input type="text" name="horario" /><br />

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

    <input type="submit" name="submit" value="Crear" />

</form>