<html>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('consultarCalificacion/formulario'); ?>

    <label for="id">Matricula:</label>
    <input type="text" name="id" /><br />

    <input type="submit" name="submit" value="consultar" />

</form>
</html>
