

<?php 
require_once "conexion.php";
class UsuariosModel extends Conexion
{

	
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
	public function consultarUsuarioModelo()
	{


		$sql="SELECT * FROM tusuarios where tusuarios.cedula = :ced";
		$this->stmt = $this->conectar()->prepare($sql);

		$this->stmt->bindParam(':ced',$this->datosModelo["ced"]);
		$this->stmt->execute();
		$cont=$this->stmt->rowCount();
		$datos=$this->stmt->fetch(PDO::FETCH_ASSOC);

		if ($cont==0) {
			//no encontro nada
			return ["operacion"=>false];
		}else{
			//encontro a alguien
			return ["operacion"=>true, "datos"=>$datos];

		}
	}
	public function loginUsuariosModel()
	{

		$usuario=$this->consultarUsuarioModelo();

		if ($usuario["operacion"]==false) {
			return ["operacion" =>false,
			"codError"=>'1'];
		}

if ($usuario["datos"]["status"]==0) {
			return ["operacion" =>false,
			"codError"=>'2'];
		}

$pwd=$usuario["datos"]["password"];
	/*

	*/
		// if (10==10) { //

		if ($this->datosModelo["pw"]==$pwd ) {
			return ["operacion" =>true,"datos" => $usuario];
		} else {
			return ["operacion" =>false,
			"codError"=>'3',"claveErrada"=>$this->datosModelo["pw"]];
		}
		
		
	}

	

	public function listarUsuariosModel()
	{
		$sql="SELECT * FROM tusuarios";
		$this->stmt = $this->conectar()->prepare($sql);
		$this->stmt->execute();
		$datos = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		return $datos;
	}
	

	public function registrarUsuariosModel()
	{
		$sql  = "INSERT INTO tusuarios(nombre,apellido,direccion,correo,cedula,telefono,status,password) VALUES (:nom,:apell,:direccion, :correo, :cedula,:telefono, 1,:pw)";
		$this->stmt = $this->conectar()->prepare($sql);
		$this->stmt->bindParam(":nom", $this->datosModelo["nom"], PDO::PARAM_STR);
		$this->stmt->bindParam(":apell", $this->datosModelo["apell"], PDO::PARAM_STR);
		$this->stmt->bindParam(":direccion", $this->datosModelo["dir"], PDO::PARAM_STR);
		$this->stmt->bindParam(":correo", $this->datosModelo["correo"], PDO::PARAM_STR);
		$this->stmt->bindParam(":cedula", $this->datosModelo["ced"], PDO::PARAM_STR);
		$this->stmt->bindParam(":telefono", $this->datosModelo["tlf"], PDO::PARAM_STR);
		$this->stmt->bindParam(":pw", $this->datosModelo["pw"], PDO::PARAM_STR);
		
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


		public function modificarUsuariosModel()
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

			public function borrarUsuariosModel()
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


			}