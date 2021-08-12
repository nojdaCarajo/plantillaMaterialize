<?php 

$Documento='
<?php 
require_once "../../modelo/'.strtolower($datosArchivo).'Modelo.php";

require_once "../../controlador/'.strtolower($datosArchivo).'Controlador.php";

if (isset($_POST["accion"])) {
$art= NEW '.ucwords ($datosArchivo).'Ctrl();

switch ($_POST["accion"]) {

			case "listar":
			$art->listar'.ucwords($datosArchivo).'Ctrl();
			break;

			case "consulta":
			//$art->funcion();
			break;

		case "":
			$art->funcion();
			break;

			case " ":
			$art->funcion();
			
			break;
		
		default:
			# code...
			break;
	}
}

';

 ?>