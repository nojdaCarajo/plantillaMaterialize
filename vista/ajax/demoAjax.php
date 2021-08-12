<?php
require_once "../../modelo/demoModelo.php";

require_once "../../controlador/demoControlador.php";

if (isset($_POST["accion"])) {
$art= NEW DemoCtrl();

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

?>