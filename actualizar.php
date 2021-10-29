<?php

include 'config.php';
include 'conexion.php';
include 'persona.php';
$sentencia=$pdo->prepare("SELECT * FROM alumno where email=?");
$sentencia->bindParam(1, $email=$_POST['email']);
$sentencia->execute();
$persona=$sentencia->fetch(PDO::FETCH_ASSOC);
