<?php 


$db = new mysqli('localhost', 'root', '', 'basefinal');

if($db->connect_errno > 0){
	 echo "<script>alert('usuario y contraseña son incorrecto')</script>";  
     echo "<script>window.location='index.php';</script>";  
    die('Imposible conectar [' . $db->connect_error . ']');
}

else{
  
      //echo "<script>alert('entro');</script>"; 
}

 ?>