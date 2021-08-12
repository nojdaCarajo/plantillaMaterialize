
<?php 
require_once "../../modelo/luchonasModelo.php";

require_once "../../controlador/luchonasControlador.php";

if (isset($_POST["accion"])) {
$art= NEW LuchonasCtrl();

switch ($_POST["accion"]) {

			case "listar":
			$art->listarLuchonasCtrl();
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

