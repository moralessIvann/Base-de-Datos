<?php 


//error_reporting(E_ALL);
//ini_set('display_errors', '1');

error_reporting(0);
include("conexion.php");
$idEmpleado = $_POST['idEmpleado'];
$nombre1 = $_POST['Nombre1'];
$nombre2 = $_POST['Nombre2'];
$apellidoP = $_POST['ApellidoP'];
$apellidoM = $_POST['ApellidoM'];
$puesto = $_POST['Puesto'];
$boton = $_POST['boton'];


switch ($boton) {
	case 'insertar':
		insertar($idEmpleado, $nombre1, $nombre2, $apellidoP, $apellidoM, $puesto, $boton );
    break;

    case 'modificar':
        modificar($idEmpleado, $nombre1, $nombre2, $apellidoP, $apellidoM, $puesto);   
    break;

    case 'borrar':	
        borrar($idEmpleado);	
    break;

        default:
		# code...
		break;
}

function insertar($idEmpleado, $nombre1, $nombre2, $apellidoP, $apellidoM, $puesto, $boton){
include("conexion.php");	

$sql = "INSERT INTO empleado (idEmpleado, Nombre1, Nombre2, ApellidoP, ApellidoM, Puesto) VALUES( '$idEmpleado', '$nombre1', '$nombre2', '$apellidoP', '$apellidoM', '$puesto')";
 
if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas Insertadas:'.$db->affected_rows;
$db->close();
}

function modificar($idEmpleado, $nombre1, $nombre2, $apellidoP, $apellidoM, $puesto){
	
include("conexion.php");

$sql = "UPDATE empleado SET  Nombre1 = '$nombre1', Nombre2 = '$nombre2', ApellidoP = '$apellidoP', ApellidoM = '$apellidoM', Puesto = '$puesto'  WHERE idEmpleado = $idEmpleado; ";
 
if(! $db->query($sql)){die('Ocurrio un error ejecutando el query [' . $db->error . ']');}
 
$usuarioExiste = $db->affected_rows;	

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idEmpleado no existe')</script>";
$db->close();
}

$db->close();
}

function borrar($idEmpleado){
include("conexion.php");	

$sql = "DELETE FROM empleado WHERE idEmpleado = '$idEmpleado'; ";
 

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas borradas:'.$db->affected_rows;

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idEmpleado no existe')</script>";
$db->close();
}
}
 ?>