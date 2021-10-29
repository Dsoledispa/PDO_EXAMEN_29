<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
$stmt = $pdo->prepare("UPDATE alumnos SET email=?, nombre=?, apellido=?, edad=? WHERE email=?");

$stmt->bindParam(1, $email= $_POST['email']);
$stmt->bindParam(2, $nombre = $_POST['nombre']);
$stmt->bindParam(3, $apellido = $_POST['apellido']);
$stmt->bindParam(4, $edad= $_POST['edad']);
$stmt->bindParam(5, $email2= $_POST['email2']);
// Excecute
try{
    if($stmt->execute()){
        echo 'bien';
        header('Location: vista.php');
    }else{ echo 'mal';}
}catch (PDOException $e) {
    echo 'mal';
   echo  $e->getMessage();
}