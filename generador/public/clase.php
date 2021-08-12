<?php 
if (isset($_POST["personalSettersGettersCheck"])){
	$settersGetters= '';

 $i=0;

 foreach ($_POST["setGetType"] as $key => $value) {
 	$settersGetters=$settersGetters.' '.$value.' $'.$_POST["setGetCampo"][$i++].'; 
 	';
 }

 foreach ($_POST["setGetCampo"] as $key => $value) {
 	$settersGetters=$settersGetters.'
 	public function set'.ucwords($value).'($'.$value.'){

 		$this->'.$value.' = $'.$value.';
 	}
 	';	
 }



 foreach ($_POST["setGetCampo"] as $key => $value) {
 	$settersGetters=$settersGetters.'

 	public function get'.ucwords($value).'(){

 		return $this->'.$value.';
 	}
 	';	
 }

}else{
	$settersGetters= '
	private $datosModelo= array();


	public function __construct($datosModelo=null) 
	{
		$this->datosModelo = $datosModelo;
	}

	public function getDatosModelo(){
		return $this->datosModelo;
	}
	public function setDatosModelo($datosModelo){
		$this->datosModelo = $datosModelo;
	}
	';
}

$Documento='

<?php 
require_once "conexion.php";
class '.ucwords($datosArchivo).'Model extends Conexion
{

	'.$settersGetters.'


	public function listar'.ucwords($datosArchivo).'Model()
	{
		$sql="SELECT * FROM";
		$this->stmt = $this->conectar()->prepare($sql);
		$this->stmt->execute();
		$datos = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		return $datos;
	}
	

	public function registrar'.ucwords($datosArchivo).'Model()
	{
		$sql  = "INSERT INTO $tabla(campo1,campo2,campo3) VALUES (:campo1, :campo2, :campo3)";
		$this->stmt = $this->conectar()->prepare($sql);
		$this->stmt->bindParam(":campo1", $this->datosModelo["campo1"], PDO::PARAM_STR);
		$this->stmt->bindParam(":campo2", $this->datosModelo["campo2"], PDO::PARAM_STR);
		$this->stmt->bindParam(":campo3", $this->datosModelo["campo3"], PDO::PARAM_STR);
		
		if($this->stmt->execute()){
			return [
			"operacion"    => true,
			];

			}else {
				return [
				"operacion"    => false,
				"codigo_error" => 1,
				];
			}

		}


		public function modificar'.ucwords($datosArchivo).'Model()
		{
			"UPDATE $tabla SET campo1 =:campo1, campo2 = :campo2, campo3 =:campo3 WHERE $tabla.id = :id";
			$this->stmt = $this->conectar()->prepare($sql);
			$this->stmt->bindParam(":campo1", $this->datosModelo["campo1"], PDO::PARAM_STR);
			$this->stmt->bindParam(":campo2", $this->datosModelo["campo2"], PDO::PARAM_STR);
			$this->stmt->bindParam(":campo3", $this->datosModelo["campo3"], PDO::PARAM_STR);

			if($this->stmt->execute()){
				return [
				"operacion"    => true,
				];

				}else {
					return [
					"operacion"    => false,
					"codigo_error" => 1,
					];
				}

			}

			public function borrar'.ucwords($datosArchivo).'Model()
			{


				$sql="DELETE FROM $tabla WHERE $tabla.id = :id";
				$this->stmt = $this->conectar()->prepare($sql);

				$this->stmt->bindParam(":id",$id);
				if($this->stmt->execute()){
					return [
					"operacion"    => true,
					];

					}else {
						return [
						"operacion"    => false,
						"codigo_error" => 1,
						];
					}
				}


			}';


			?>