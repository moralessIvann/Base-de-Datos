
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


$sql = "SELECT * FROM proveedor";

if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']'); 
}

echo "<table border='1px' width='100%' class='hoverable center-align'><tr><td width='14%'>idProveedor</td> <td width='14%'>Nombre1</td> <td width='14%'>Nombre2</td> <td width='14%'>ApellidoP</td> <td width='14%'>ApellidoM</td> <td width='14%'>Tel</td><td width='14%'>Empresa</td></tr>";
 
          
while($fila = $resultado->fetch_assoc()){

    // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    echo  "<tr> <td width='14%'>".$fila['idProveedor']."</td> <td width='14%'>".$fila['Nombre1']."</td> <td width='14%'>".$fila['Nombre2']."</td> <td width='14%'>".$fila['ApellidoP']."</td> <td width='14%'>".$fila['ApellidoM']."</td> <td width=14%'>".$fila['Tel']."</td> <td width='14%'>".$fila['Empresa'].'</td> </tr>';

}
echo "</table>"; 
$db->close();
}
 ?>
</body>
</html>