<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';

$alumno=new Alumno($_POST['email'],$_POST['nombre'],$_POST['apellido'],$_POST['edad']);
$stmt = $pdo->prepare("INSERT INTO alumnos(email, nombre, apellido, edad) VALUES (:email, :nombre, :apellido, :edad)" );
try{
    if($stmt->execute((array) $alumno)){
        echo 'bien';
        header('Location: vista.php');
    }else{ echo 'mal';}
}catch (PDOException $e) {
    echo 'mal';
   echo  $e->getMessage();
}

