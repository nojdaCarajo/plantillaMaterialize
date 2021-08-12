<?php 

$Documento='   
<?php 

class '.ucwords($datosArchivo).'Ctrl{
function __construct()
	{
		session_start();
	}	


	public function registrar'.ucwords($datosArchivo).'Ctrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW '.ucwords($datosArchivo).'Model();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->registrar'.ucwords($datosArchivo).'Model();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true, "error" => $respuesta["codError"]]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function listar'.ucwords($datosArchivo).'Ctrl()
	{

		$art= NEW '.ucwords($datosArchivo).'Model();

	$respuesta=$art->listar'.ucwords($datosArchivo).'Model();
	foreach ($respuesta as $key => $value) {
		echo "<p>".$value["campo1"]."</p>";
	}
		
	}


		public function modificar'.ucwords($datosArchivo).'Ctrl()
	{
	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW '.ucwords($datosArchivo).'Model();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->modificar'.ucwords($datosArchivo).'Model();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}

public function eliminar'.ucwords($datosArchivo).'Ctrl()
	{

	$datosCtrl = array("campo1" => $_POST["campo1"],
"campo2" => $_POST["campo2"],
"campo3" => $_POST["campo3"]
);
		$art= NEW '.ucwords($datosArchivo).'Model();
	$art->setDatosModelo($datosCtrl);
	$respuesta=$art->eliminar'.ucwords($datosArchivo).'Model();
	if ($respuesta["operacion"] == true) {	
				echo json_encode(["operacion" => true]);
		} else {
			echo json_encode(["operacion" => false,"error" => $respuesta["codError"]]);
			//echo "error";
		}
		
	}


}

 ?>
';



 ?>