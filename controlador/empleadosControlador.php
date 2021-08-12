   
<?php 

class EmpleadosCtrl{
function __construct()
	{
		session_start();
	}	


	public function registrarEmpleadosCtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW EmpleadosModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->registrarEmpleadosModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true, "error" => $respuesta["codError"]]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function listarEmpleadosCtrl()
	{

		$art= NEW EmpleadosModel();

	$respuesta=$art->listarEmpleadosModel();
	foreach ($respuesta as $key => $value) {
		echo "<p>".$value["campo1"]."</p>";
	}
		
	}


		public function modificarEmpleadosCtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW EmpleadosModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->modificarEmpleadosModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function eliminarEmpleadosCtrl()
	{

	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW EmpleadosModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->eliminarEmpleadosModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}


}

 ?>
