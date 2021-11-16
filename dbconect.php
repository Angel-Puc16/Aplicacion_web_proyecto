<?php

$host = "localhost";
$username = "root";
$password = getenv('modulo_1');
$database = "prueba";

   try {
     $conexion = new PDO("mysql:host=$host;dbname=$database",$username,$password);
     echo 'Conexion a la base',$database,'exitosa';
   } catch (PDOException $pe) {
       die ("no se pudo conectar a la base $database:". $pe->getMessage());
   }

?>