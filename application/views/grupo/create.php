<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('grupo/create'); ?>

    <label for="letra">letra:</label>
    <input type="text" name="letra" /><br />

    <select name='modalidad'>
    <option value="matutino">Matutino</option>
    <option value="vespertino">Tarde</option>
    </select>
    
    <input type="submit" name="submit" value="Crear" />

</form>