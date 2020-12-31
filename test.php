<?php
//conectando a la base de datos de php 
   $host="185.201.11.212";
   $contraseña="B!uwj$]M";
   $bd="u868164586_wallas";
   $usuario="u868164586_wallas";
   $tabla = "productoDBMariaFelix";
      
   function prod(){
    $cnx = new mysqli($host, $bd, $contraseña,$usuario, $tabla);
    $errorCnx = false;
    if($cnx->connect_error){
        echo "error";
        $errorCnx = true;
    }else {
        echo "conexion correcta :) Maria Felix";
    }
    return $Cnx; 
   }
   $Cnx = prod();
 
      if($_POST)
      {
         $queryInsert = "INSERT INTO $tabla (Nombre) VALUES ('".$_POST['nombreform']."');";
 
         $resultInsert = mysqli_query($cnx, $queryInsert); 
 
         if($resultInsert)
         {
            echo "<strong>Se ingresaron los registros con exito</strong>. <br>";
         }
         else
         {
            echo "No se ingresaron los registros. <br>";
         }
 
      }

 