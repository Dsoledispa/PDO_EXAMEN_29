<?php
include 'config.php';
include 'conexion.php';
include_once 'persona.php';
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE email=?");
$stmt->bindParam(1, $email=$_GET['email']);
try{
    if($stmt->execute()){
        echo 'bien';
        header('Location: vista.php');
    }else{ echo 'mal';}
}catch (PDOException $e) {
    echo 'mal';
   echo  $e->getMessage();
}