   
<?php 

class LOCOTACtrl{
function __construct()
	{
		session_start();
	}	


	public function registrarLOCOTACtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW LOCOTAModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->registrarLOCOTAModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true, "error" => $respuesta["codError"]]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function listarLOCOTACtrl()
	{

		$art= NEW LOCOTAModel();

	$respuesta=$art->listarLOCOTAModel();
	foreach ($respuesta as $key => $value) {
		echo "<p>".$value["campo1"]."</p>";
	}
		
	}


		public function modificarLOCOTACtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW LOCOTAModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->modificarLOCOTAModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function eliminarLOCOTACtrl()
	{

	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW LOCOTAModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->eliminarLOCOTAModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}


}

 ?>
