
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


$sql = "SELECT * FROM empleado";

if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']'); 
}

echo "<table border='1px' width='100%' class='hoverable center-align'><tr><td width='16%'>idEmpleado</td> <td width='16%'>Nombre1</td> <td width='16%'>Nombre2</td> <td width='16%'>ApellidoP</td> <td width='16%'>ApellidoM</td> <td width='16%'>Puesto</td></tr>";

          
while($fila = $resultado->fetch_assoc()){

    // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    echo  "<tr><td width='16%'>".$fila['idEmpleado']."</td> <td width='16%'>".$fila['Nombre1']."</td> <td width='16%'>".$fila['Nombre2']."</td> <td width='16%'>".$fila['ApellidoP']."</td> <td width='16%'>".$fila['ApellidoM']."</td> <td width='16%'>".$fila['Puesto'].'</td></tr>';

}
echo "</table>"; 
$db->close();
}
 ?>
</body>
</html>