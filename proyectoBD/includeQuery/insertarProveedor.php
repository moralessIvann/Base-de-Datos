<?php 


//error_reporting(E_ALL);
//ini_set('display_errors', '1');

error_reporting(0);
include("conexion.php");
$idProveedor = $_POST['idProveedor'];
$nombre1 = $_POST['Nombre1'];
$nombre2 = $_POST['Nombre2'];
$apellidoP = $_POST['ApellidoP'];
$apellidoM = $_POST['ApellidoM'];
$tel = $_POST['Tel'];
$empresa = $_POST['Empresa'];
$boton = $_POST['boton'];


switch ($boton) {
	case 'insertar':
		insertar($idProveedor, $nombre1, $nombre2, $apellidoP, $apellidoM, $tel, $empresa, $boton);
    break;

    case 'modificar':
        modificar($idProveedor, $nombre1, $nombre2, $apellidoP, $apellidoM, $tel, $empresa);   
    break;

    case 'borrar':	
        borrar($idProveedor);	
    break;

        default:
		# code...
		break;
}

function insertar($idProveedor, $nombre1, $nombre2, $apellidoP, $apellidoM, $tel, $empresa, $boton){
include("conexion.php");	

$sql = "INSERT INTO proveedor (idProveedor, Nombre1, Nombre2, ApellidoP, ApellidoM, Tel, Empresa) VALUES( '$idProveedor', '$nombre1', '$nombre2', '$apellidoP', '$apellidoM', '$tel', '$empresa')";
 
if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas Insertadas:'.$db->affected_rows;
$db->close();
}

function modificar($idProveedor, $nombre1, $nombre2, $apellidoP, $apellidoM, $tel, $empresa){
	
include("conexion.php");

$sql = "UPDATE proveedor SET  Nombre1 = '$nombre1', Nombre2 = '$nombre2', ApellidoP = '$apellidoP', ApellidoM = '$apellidoM', Tel = '$tel', Empresa = '$empresa'  WHERE idProveedor = $idProveedor; ";
 
if(! $db->query($sql)){die('Ocurrio un error ejecutando el query [' . $db->error . ']');}
 
$usuarioExiste = $db->affected_rows;	

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idProveedor no existe')</script>";
$db->close();
}

$db->close();
}

function borrar($idProveedor){
include("conexion.php");	

$sql = "DELETE FROM proveedor WHERE idProveedor = '$idProveedor'; ";
 

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas borradas:'.$db->affected_rows;

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idProveedor no existe')</script>";
$db->close();
}
}
 ?>