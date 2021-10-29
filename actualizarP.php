<?php 
//include_once 'cabecera.html';
//include_once 'actualizar.php';

?>
<center><h1>Modificar Alumno</h1></center>
<br>
<div>
    <form action="modificarController.php" method="post">
        
        <input type="hidden" name="email2" value="<?php $email2=$_GET['email']; ?>">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" required>

        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>

        <label for="nombre">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>

        <label for="nombre">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" required>
    
    <br>
        <input type="submit" class="btn btn-success" name="Enviar" value="Submit">
    </form>
</div>
