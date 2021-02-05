
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


$sql = "SELECT * FROM articulo";

if(!$resultado = $db->query($sql)){
    die('Ocurrio un error ejecutando el query [' . $db->error . ']'); 
}

echo "<table border='1px' width='100%' class='hoverable center-align'><tr><td width='11%'>idArticulo</td><td width='11%'>Nombre</td> <td width='11%'>CodigoBarra</td> <td width='11%'>Marca</td> <td width='11%'>Stock</td> <td width='11%'>Presentacion</td>  <td width='11%'>FechaCaducidad</td> <td width='11%'>Proveedor_idProveedor</td> <td width='11%'>Departamento_idDepartamento</td> </tr>";

          
while($fila = $resultado->fetch_assoc()){

    // $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    echo  "<tr><td width='11%'>".$fila['idArticulo']."</td> <td width='11%'>".$fila['Nombre']."</td>  <td width='11%'>".$fila['CodigoBarra']."</td> <td width='11%'>".$fila['Marca']."</td> <td width='11%'>".$fila['Stock']."</td> <td width='11%'>".$fila['Presentacion']."</td>  <td width='11%'>".$fila['FechaCaducidad']."</td> <td width='11%'>".$fila['Proveedor_idProveedor']."</td>  <td width='11%'>".$fila['Departamento_idDepartamento'].'</td>   </tr>';

}
echo "</table>"; 
$db->close();
}
 ?>
</body>
</html>