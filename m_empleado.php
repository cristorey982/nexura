<?php
//error_reporting(E_ALL);
require_once('conectar.php');

class Usuario {
    
    private $registro;
                function __construct() {
                    
                    $this->registro=array();
        
    }        

         public function get_usuario(){
            
            $sql="select * from usuario";

            $res=mysqli_query(Conectar::con(),$sql) or die(mysqli_error());

                while($reg=mysqli_fetch_assoc($res))
                    {
                        $this->registro[]=$reg;
                    }
                return $this->registro;     
    
        }

        public function del_usuario($id){
    
            $sql="delete from registro where id=$id";
            $res=  mysqli_query(Conectar::con(), $sql) or die(mysqli_error());
            echo "<script type='text/javascript'> 
         alert ('Eliminado Exitosamente');
         window.location='v_registro.php';
         </script>";

        }

        public function edit_material_ind($nom, $des, $id){
        
        $sql="update registro set asi_nom='$nom', asi_des='$des' where id=$id";
        $res=mysqli_query(Conectar::con(),$sql);
        echo "<script type='text/javascript'>
        alert ('Editado Exitosamente');
        window.location='v_registro.php';
        </script>";
       
       }

       public function get_registro_id($id){

        $sql="select * from registro where id=$id";
        $res=mysqli_query(Conectar::con(),$sql);
        while($reg=mysqli_fetch_assoc($res))
        {
            $this->registro[]=$reg;
        }
        return $this->registro;
       
       } 
    

    }// end class usuario

?>
