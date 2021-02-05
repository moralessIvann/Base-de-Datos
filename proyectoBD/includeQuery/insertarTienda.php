<?php 


//error_reporting(E_ALL);
//ini_set('display_errors', '1');

error_reporting(0);
include("conexion.php");
$idTienda = $_POST['idTienda'];
$nombre = $_POST['Nombre'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];
$stock = $_POST['Stock'];
$articuloID = $_POST['Articulo_idArticulo'];
$boton = $_POST['boton'];


switch ($boton) {
	case 'insertar':
		insertar($idTienda, $nombre, $direccion, $telefono, $stock, $articuloID, $boton );
    break;

    case 'modificar':
        modificar($idTienda, $nombre, $direccion, $telefono, $stock, $articuloID);   
    break;

    case 'borrar':	
        borrar($idTienda);	
    break;

        default:
		# code...
		break;
}

function insertar($idTienda, $nombre, $direccion, $telefono, $stock, $articuloID, $boton){
include("conexion.php");	

$sql = "call Venta('$idTienda', '$nombre', '$direccion', '$telefono', '$stock', '$articuloID')";
 
 
if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas Insertadas:'.$db->affected_rows;
$db->close();
}

function modificar($idTienda, $nombre, $direccion, $telefono, $stock, $articuloID){
	
include("conexion.php");

$sql = "UPDATE Tienda SET  idTienda = '$idTienda' , Nombre = '$nombre', Direccion = '$direccion', Telefono = '$telefono' , Stock = '$stock', Articulo_idArticulo = '$articuloID'  WHERE idTienda = $idTienda; ";
 
if(! $db->query($sql)){die('Ocurrio un error ejecutando el query [' . $db->error . ']');}
 
$usuarioExiste = $db->affected_rows;	

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idTienda no existe')</script>";
$db->close();
}

$db->close();
}

function borrar($idTienda){
include("conexion.php");	

$sql = "DELETE FROM Tienda WHERE idTienda = '$idTienda'; ";
 

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas borradas:'.$db->affected_rows;

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idTienda no existe')</script>";
$db->close();
}
}
 ?>