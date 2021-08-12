   
<?php 

class UsuariosCtrl{
function __construct()
	{
		session_start();
	}	


	public function registrarUsuariosCtrl()
	{
	$datosCtrl = array("nom" => $_POST["nombre"],
"apell" => $_POST["apellido"],
"ced" => $_POST["cedula"],
"correo" => $_POST["correo"],
"tlf" => $_POST["telefono"],
"dir" => $_POST["direccion"],
"pw" => $_POST["pw"]
);
		$art= NEW UsuariosModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->registrarUsuariosModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}
public function loginUsuariosCtrl()
	{
	$datosCtrl = array('ced' => $_POST["cedula"],
	'pw' => $_POST["password"]);

	$art= NEW UsuariosModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->loginUsuariosModel();
	if ($respuesta['operacion'] == true) {

	

		foreach ($respuesta['datos'] as $data => $value) {

					$_SESSION['datosUsuario'] = [
					"user"=>$value["iduser"],
					"coduser"=>$value["coduser"],
					"cedula"=>$value["cedula"],	
					"direccion"=>$value["direccion"],
					"correo"=>$value["correo"],				
					"nombre"=>$value["nombre"],				
					"apellido"=>$value["apellido"],
					"status"=>$value["status"],
					"session" =>1     
				];  
									
			}
				echo json_encode(["operacion" => true]);

				
		} else {
			echo json_encode(["operacion" => false, "error" => $respuesta["codError"],"clave"=>$respuesta["claveErrada"]]);
		}
		
	}
public function listarUsuariosCtrl()
	{

		$art= NEW UsuariosModel();

	$respuesta=$art->listarUsuariosModel();
	
// respuesta de ejemplo
$respuesta=[
	["id" =>"0001", "nombre"=>'Brandon',"apellido"=>'moneda',"departamento"=>'administrativo',"edad"=>'32',"cargo"=>'analista'],
["id" =>"0002", "nombre"=>'Eliana',"apellido"=>'orellana',"departamento"=>'ventas',"edad"=>'45',"cargo"=>'gerente'],
["id" =>"0003", "nombre"=>'Diana',"apellido"=>'Garcia',"departamento"=>'ventas',"edad"=>'22',"cargo"=>'vendedora'],
["id" =>"0004", "nombre"=>'Brayan',"apellido"=>'Ozuna',"departamento"=>'mantenimiento',"edad"=>'21',"cargo"=>'vigilante'],
["id" =>"0013", "nombre"=>'Lucio',"apellido"=>'Odelio',"departamento"=>'Estrategias',"edad"=>'30',"cargo"=>'Gerente'],
["id" =>"0101", "nombre"=>'Audelina',"apellido"=>'Figueroa',"departamento"=>'contabilidad',"edad"=>'25',"cargo"=>'analista'],

["id" =>"0391", "nombre"=>'Francisco',"apellido"=>'Mendoza',"departamento"=>'mantenimiento',"edad"=>'42',"cargo"=>'supervisor'],
];
	 	echo json_encode($respuesta);
	}



public function consultarUsuariosCtrl()
	{

		$art= NEW UsuariosModel();

	$respuesta=$art->listarUsuariosModel();
	
// respuesta de ejemplo
$respuesta=	["id" =>"0001", "nombre"=>'Brandon',"apellido"=>'moneda',"departamento"=>'administrativo',"edad"=>'32',"cargo"=>'analista'];
	 	echo json_encode($respuesta);
	}


		public function modificarUsuariosCtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW UsuariosModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->modificarUsuariosModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function eliminarUsuariosCtrl()
	{

	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW UsuariosModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->eliminarUsuariosModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}


}

 ?>
