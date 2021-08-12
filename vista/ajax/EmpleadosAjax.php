
<?php 
require_once "../../modelo/empleadosModelo.php";

require_once "../../controlador/empleadosControlador.php";

if (isset($_POST["accion"])) {
$art= NEW EmpleadosCtrl();

switch ($_POST["accion"]) {

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

