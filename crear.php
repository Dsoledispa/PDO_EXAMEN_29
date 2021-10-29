<!-- <?php include_once 'cabecera.html';
?> -->
<center><h1>Crear Alumno</h1></center>
<br>
<div class="form-group align-items-center">
    <form action="crearController.php" method="POST">
        
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="diego@escuela.com " required>

        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Diego " required>

        <label for="nombre">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Soledispa " required>

        <label for="nombre">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="21 " required>
        <input type="submit" class="btn btn-success" name="Enviar" value="Submit">
    </form>
</div>