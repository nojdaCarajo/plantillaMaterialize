
<?php 
require_once "../../modelo/usuariosModelo.php";

require_once "../../controlador/usuariosControlador.php";

if (isset($_POST["accion"])) {
$art= NEW UsuariosCtrl();

switch ($_POST["accion"]) {
	case "login":
		$art->loginUsuariosCtrl();
		break;

			case "listar":
			$art->listarUsuariosCtrl();
			break;

		case "registrar":
			$art->registrarUsuariosCtrl();
			break;

			case "consultar":
			$art->consultarUsuariosCtrl();
			
			break;
		
		default:
			# code...
			break;
	}
}

