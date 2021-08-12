<?php 

class Generador
{

	public function seleccionarCarpeta($tipo)
	{
		$carpeta=["padre" =>"", "hija" => ""];
		switch ($tipo) {
			case 'Controlador':

				$carpeta=["padre" =>"controlador", "hija" => ""];
				break;

				case 'Clase':
				$carpeta=["padre" =>"modelo", "hija" => ""];
				break;

				case 'Vista':
				$carpeta=["padre" =>"vista", "hija" => ""];
				break;

				case 'Listado':
				$carpeta=["padre" =>"vista", "hija" => "/listas"];
				break;

				case 'Formulario':
				$carpeta=["padre" =>"vista", "hija" => "/formularios"];
				break;
			
			default:
				$carpeta=["padre" =>"vista", "hija" => "/".$tipo.""];
				break;
		}
		return $carpeta;
	}

	public function direccionEntradas($nombre)
	{
		$ar= fopen("../../modelo/entradas.php", "a");
	fwrite($ar, PHP_EOL);
	fwrite($ar, 'array_push($listaBlanca,"'.$nombre.'");');
	}
	public function direccionModulos($nombre,$carpeta)
	{
		$ar= fopen("../../modelo/modulos.php", "a+");
fwrite($ar, PHP_EOL);
	fwrite($ar, "require_once '".$carpeta."/".$nombre.ucwords($carpeta).".php';");
	}
		public function generarArchivoPrueba($nombre,$tipo)
	{
		$terminacion="php";
	$datosArchivo=$nombre;
	$carpeta=$this->seleccionarCarpeta($tipo);
	require_once strtolower ($tipo).'.php';
	if ($tipo=="Clase") {
		// $ar= fopen("../../".$carpeta["padre"]."".$carpeta["hija"]."/".$datosArchivo."Modelo.php", "a");
	$ar= fopen("../../".$carpeta["padre"]."".$carpeta["hija"]."/".strtolower ($datosArchivo)."Modelo.php", "a");
	}else{
		// $ar= fopen("../../".$carpeta["padre"]."".$carpeta["hija"]."/".strtolower ($datosArchivo)."".$tipo.".php", "a");
		if ($tipo=="Js") {
			$terminacion="js";
		}
	$ar= fopen("../../".$carpeta["padre"]."".$carpeta["hija"]."/".strtolower ($datosArchivo)."".$tipo.".".$terminacion."", "a");

	}
	if ($tipo=="Vista") {
		$this->direccionEntradas($nombre);
	}

	if ($tipo == "Controlador") {
		$this->direccionModulos($nombre,"controlador");
	}


	if ($tipo == "Clase") {
		$this->direccionModulos($nombre,"modelo");
	}

	fwrite($ar,  $Documento);


echo ''.$tipo.' creado exitosamente...<br>';
/*
echo '<script type="text/javascript">
	alert("'.$tipo.' creado exitosamente")
	</script>';
*/
	}

	public function fullPackRelife()
	{
$fullPack= ["Clase","Controlador","Vista","Js","Ajax","Listado","Formulario"];

foreach ($fullPack as $key => $value) {
	 $this->generarArchivoPrueba($_POST["fullPack"],$value);
}

	}

}
 $mujer=new Generador();

if (isset($_POST["fullPackCheck"])){
	$mujer->fullPackRelife();

	
}

if (isset($_POST["personalFormName"])) {
	foreach ($_POST["personalFormName"] as $key => $value) {
	 $mujer->generarArchivoPrueba($_POST["".$value.""],$value);
}
}

echo '<script type="text/javascript">
    alert("Felicidades, hasta luego");
    //window.location.href="../index.php";
    </script>';

 ?>