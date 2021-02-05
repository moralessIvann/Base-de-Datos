
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


$sql = "SELECT * FROM Tienda";

if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']'); 
}

echo "<table border='1px' width='100%' class='hoverable center-align'><tr><td width='11%'>idTienda</td> <td width='11%'>Nombre</td> <td width='11%'>Direccion</td> <td width='11%'>Telefono</td> <td width='11%'>Stock</td> <td width='11%'>Articulo_idArticulo</td> </tr>";

          
while($fila = $resultado->fetch_assoc()){

    // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    echo  "<tr><td width='11%'>".$fila['idTienda']."</td> <td width='11%'>".$fila['Nombre']."</td> <td width='11%'>".$fila['Direccion']."</td> <td width='11%'>".$fila['Telefono']."</td> <td width='11%'>".$fila['Stock']."</td> <td width='11%'>".$fila['Articulo_idArticulo'].'</td></tr>';

}
echo "</table>"; 
$db->close();
}
 ?>
</body>
</html>