<h2><?php echo $title; ?></h2>


        
   <form action="" method="post">
            <label>ID</label>
            <input readonly value="<?php echo $maestro["id"]?>" />
            <label>Nombre</label>
            <input value="<?php echo $maestro["nombre"]?>" />
            <label>Apellido</label>
            <input value="<?php echo $maestro["apellido"]?>" />
    </form>

