<?php
include("connect.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

$consulta = "INSERT INTO usuarios(nombre, email, comentario) VALUES ('$nombre', '$email', '$comentario')";

$resultado = mysqli_query($conn, $consulta);

if(!$resultado){
   echo "Error al guardar datos";
}else {
   echo "Funcionó!!!!";
}

