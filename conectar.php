<?php
   class Conectar
   {
     public static function con(){

  $hostname_db = "localhost";
  $database_db = "nexura";
  $username_db = "root";
  $password_db = "";
  //Conectar a la base de datos
  $conexion = mysqli_connect($hostname_db, $username_db, $password_db);
  
  

  //Seleccionar la base de datos
      mysqli_select_db($conexion,$database_db) or die ("Ninguna DB seleccionada");

      if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";    

      return $conexion;
    }  
  }

?>