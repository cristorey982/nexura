<?php 
   //require_once "conexion.php";
   //$conexion=conexion();
 
 $conexion=mysqli_connect('localhost','root','','nexura');

	    	$emp_nom=$_POST['nombre'];
        $emp_ema=$_POST['email'];
        $emp_sex=$_POST['sexo'];        
        $emp_are=$_POST['area_id'];
        $emp_bol=$_POST['boletin'];
        $emp_des=$_POST['descripcion'];
        $emp_rol=$_POST['roles'];
        
        $sql="insert into empleados (id,nombre,email,sexo,area_id,boletin,descripcion) values (null,'$emp_nom','$emp_ema','$emp_sex','$emp_are','$emp_bol','$emp_des')";
    
        echo mysqli_query($conexion,$sql);

                     
        
?>