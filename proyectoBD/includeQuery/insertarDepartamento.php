<?php 


//error_reporting(E_ALL);
//ini_set('display_errors', '1');

error_reporting(0);
include("conexion.php");
$idDepartamento = $_POST['idDepartamento'];
$nombre = $_POST['Nombre'];
$empleado_idEmpleado = $_POST['Empleado_idEmpleado'];
$boton = $_POST['boton'];


switch ($boton) {
	case 'insertar':
		insertar($idDepartamento, $nombre, $empleado_idEmpleado, $boton );
    break;

    case 'modificar':
        modificar($idDepartamento, $nombre, $empleado_idEmpleado);   
    break;

    case 'borrar':	
        borrar($idDepartamento);	
    break;

        default:
		# code...
		break;
}

function insertar($idDepartamento, $nombre, $empleado_idEmpleado, $boton){
include("conexion.php");	

$sql = "INSERT INTO departamento (idDepartamento, Nombre, Empleado_idEmpleado) VALUES( '$idDepartamento', '$nombre', '$empleado_idEmpleado')";
 
if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas Insertadas:'.$db->affected_rows;
$db->close();
}

function modificar($idDepartamento, $nombre, $empleado_idEmpleado){
	
include("conexion.php");

$sql = "UPDATE departamento SET  Nombre = '$nombre', Empleado_idEmpleado = '$empleado_idEmpleado'  WHERE idDepartamento = $idDepartamento; ";
 
if(! $db->query($sql)){die('Ocurrio un error ejecutando el query [' . $db->error . ']');}
 
$usuarioExiste = $db->affected_rows;	

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idDepartamento no existe')</script>";
$db->close();
}

$db->close();
}

function borrar($idDepartamento){
include("conexion.php");	

$sql = "DELETE FROM departamento WHERE idDepartamento = '$idDepartamento'; ";
 

if(! $db->query($sql)){
     die('Ocurrio un error ejecutando el query [' . $db->error . ']');
}
//echo 'Filas borradas:'.$db->affected_rows;

$usuarioExiste = $db->affected_rows;

if($usuarioExiste ==0)
{

echo "<script>alert('El registro $idDepartamento no existe')</script>";
$db->close();
}
}
 ?>