<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('calificacion/create'); ?>
 
    <label >Materia:</label>
    
    <select name="id_materia">
    <?php foreach ($materias as $materia_item): ?>
        <?php echo '<option value="'.$materia_item['id'].'">'.$materia_item['nombre'].'</option>'?>
    <?php endforeach; ?>
    </select>

    <label for="id_maestro">clave del maestro</label>
    <input type="text" name="id_maestro" /><br />

    <label for="id_alumno">clave del alumno:</label>
    <input type="text" name="id_alumno" /><br />

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