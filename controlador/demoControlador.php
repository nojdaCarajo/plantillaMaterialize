<?php   


class DemoCtrl{
function __construct()
	{
		session_start();
	}	


	public function registrarDemoCtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW DemoModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->registrarDemoModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true, "error" => $respuesta["codError"]]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function listarDemoCtrl()
	{

		$art= NEW DemoModel();

	$respuesta=$art->listarDemoModel();
	foreach ($respuesta as $key => $value) {
		echo "<p>".$value["campo1"]."</p>";
	}
		
	}


		public function modificarDemoCtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW DemoModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->modificarDemoModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function eliminarDemoCtrl()
	{

	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW DemoModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->eliminarDemoModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}


}?>