<?php
//include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar alumnos</h1>";
echo "<td><a type='button' class='btn btn-success'href='crear.php'>Crear</a></td>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>email</th>";
echo "<th>nombre</th>";
echo "<th>apellido</th>";
echo "<th>edad</th>";
echo "<th>modificar</th>";
echo "<th>eliminar</th>";
echo "</tr>";

foreach ($listaAlumnos as $alumno) {

    echo "<tr>";
    echo "<td>{$alumno['email']}</td>";
    echo "<td>{$alumno['nombre']}</td>";
    echo "<td>{$alumno['apellido']}</td>";
    echo "<td>{$alumno['edad']}</td>";

    echo "<td><a type='button' class='btn btn-primary' href='actualizarP.php?email={$alumno['email']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Modificar</a></td>";

    echo "<td><a type='button' class='btn btn-danger' href='borrar.php?email={$alumno['email']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">Eliminar</a></td>";

    echo '</tr>';
}

echo "</table>";
echo "</html>";
