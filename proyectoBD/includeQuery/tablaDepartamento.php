
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/materialize.css">
</head>
<body>
<?php 

grid();

function grid(){

include("conexion.php");	


$sql = "SELECT * FROM departamento";

if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']'); 
}

echo "<table border='1px' width='100%' class='hoverable center-align'><tr><td width='33%'>idDepartamento</td><td width='33%'>Nombre</td><td width='33%'>Empleado_idEmpleado</td></tr>";

          
while($fila = $resultado->fetch_assoc()){

    // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    echo  "<tr><td width='33%'>".$fila['idDepartamento']."</td> <td width='33%'>".$fila['Nombre']."</td> <td width='33%'>".$fila['Empleado_idEmpleado'].'</td></tr>';

}
echo "</table>"; 
$db->close();
}
 ?>
</body>
</html>