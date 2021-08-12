   
<?php 

class LuchonasCtrl{
function __construct()
	{
		session_start();
	}	


	public function registrarLuchonasCtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW LuchonasModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->registrarLuchonasModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true, "error" => $respuesta["codError"]]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function listarLuchonasCtrl()
	{

		$art= NEW LuchonasModel();

	$respuesta=$art->listarLuchonasModel();
	foreach ($respuesta as $key => $value) {
		echo "<p>".$value["campo1"]."</p>";
	}
		
	}


		public function modificarLuchonasCtrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW LuchonasModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->modificarLuchonasModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function eliminarLuchonasCtrl()
	{

	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW LuchonasModel();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->eliminarLuchonasModel();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}


}

 ?>
