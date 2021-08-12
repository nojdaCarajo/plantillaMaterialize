
<?php 
require_once "../../modelo/locotaModelo.php";

require_once "../../controlador/locotaControlador.php";

if (isset($_POST["accion"])) {
$art= NEW LOCOTACtrl();

switch ($_POST["accion"]) {

			case "listar":
			$art->listarLOCOTACtrl();
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

