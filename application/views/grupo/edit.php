<h2><?php echo $title; ?></h2>


<?php echo validation_errors(); ?>

<?php echo form_open('grupo/edit'); ?>

    <label>Identificador</label>
    <input readonly name="id" value="<?php echo $grupo["id"]?>" />

  

    <label for="letra">Letra:</label>
    <input type="text"  value="<?php echo $grupo["letra"] ?>" name="letra" /><br />

    <select name='turno'>
    <option value="matutino">Matutino</option>
    <option value="vespertino">Tarde</option>
    </select>


    <input type="submit" name="submit" value="Actualizar" />

</form>