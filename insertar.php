<?php
   require_once 'dbconect.php';

   $nombre = $_GET["nombre"];
   $email = $_GET["email"];
   $telefono = $_GET["telefono"];
   $direccion = $_GET["direccion"];


   $insertar = $conexion->prepare("INSERT INTO usuarios(id,nombre,email,telefono,direccion) VALUES(null,$nombre,$email,$telefono,$direccion)");
   if (!$insertar) {
     echo 'Error al registrar';
   } else{
     echo 'Registrado';
   }
  
?>