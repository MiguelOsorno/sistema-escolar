<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('grupo/create'); ?>

    <label for="letra">letra:</label>
    <input type="text" name="letra" /><br />

    <select name='modalidad'>
    <option value="Escolarizado">Escolarizado</option>
    <option value="semiescolarizado">Semiescolarizado</option>
    </select>


    <select name="carrera">
    <?php foreach ($carreras as $carrera_item): ?>
        <?php echo '<option value="' . $carrera_item['id'] . '">' . $carrera_item['nombre'] . '</option>' ?>
    <?php endforeach;?>
    </select>

    <label for="cicloEscolar">Ciclo escolar:</label>
    <input type="text" name="cicloEscolar" /><br />

    <input type="submit" name="submit" value="Crear" />

</form>