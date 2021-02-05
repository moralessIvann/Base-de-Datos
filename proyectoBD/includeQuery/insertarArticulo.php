<?php 


//error_reporting(E_ALL);
//ini_set('display_errors', '1');

error_reporting(0);
include("conexion.php");
$idArticulo = $_POST['idArticulo'];
$nombre = $_POST['Nombre'];
$codigoBarra = $_POST['CodigoBarra'];
$marca = $_POST['Marca'];
$stock = $_POST['Stock'];
$presentacion = $_POST['Presentacion'];
$fechaCaducidad = $_POST['FechaCaducidad'];
$proveedor_idProveedor = $_POST['Proveedor_idProveedor'];
$departamento_idDepartamento = $_POST['Departamento_idDepartamento'];



$boton = $_POST['boton'];


switch ($boton) {
	case 'insertar':
		insertar($idArticulo, $nombre, $codigoBarra, $marca, $stock, $presentacion, $fechaCaducidad, $proveedor_idProveedor, $departamento_idDepartamento, $boton );
    break;

    case 'modificar':
        modificar($idArticulo, $nombre, $codigoBarra, $marca, $stock, $presentacion, $fechaCaducidad, $proveedor_idProveedor, $departamento_idDepartamento);   
    break;

    case 'borrar':	
        borrar($idArticulo);	
    break;

        default:
		# code...
		break;
}

function insertar($idArticulo, $nombre, $codigoBarra, $marca, $stock, $presentacion, $fechaCaducidad, $proveedor_idProveedor, $departamento_idDepartamento,$boton){
include("conexion.php");	

$sql = "call Validar( '$idArticulo', '$nombre', '$codigoBarra', '$marca', '$stock', '$presentacion', '$fechaCaducidad', '$proveedor_idProveedor', '$departamento_idDepartamento')";
 
if(! $db->query($sql)){
	
     die('Error, no ha ingresado Proveedor');
}
//echo 'Filas Insertadas:'.$db->affected_rows;
$db->close();
}

function modificar($idArticulo, $nombre, $codigoBarra, $marca, $stock, $presentacion, $fechaCaducidad, $proveedor_idProveedor, $departamento_idDepartamento){
	
include("conexion.php");

$sql = "UPDATE articulo SET  Nombre = '$nombre' , CodigoBarra = '$codigoBarra', Marca= '$marca', Stock  = '$stock', Presentacion = '$presentacion', FechaCaducidad = '$fechaCaducidad', Proveedor_idProveedor = '$proveedor_idProveedor', Departamento_idDepartamento = '$departamento_idDepartamento'  WHERE idArticulo = $idArticulo; ";
 
if(! $db->query($sql)){die('Ocurrio un error ejecutando el query [' . $db->error . ']');}
 
$usuarioExiste = $db->affected_rows;	

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idArticulo no existe')</script>";
$db->close();
}

$db->close();
}

function borrar($idArticulo){
include("conexion.php");	

$sql = "DELETE FROM articulo WHERE idArticulo = '$idArticulo'; ";
 

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas borradas:'.$db->affected_rows;

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idArticulo no existe')</script>";
$db->close();
}
}
 ?>