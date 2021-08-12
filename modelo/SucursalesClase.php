

 <?php 
 require_once "conexion.php";
class SucursalesModel extends Conexion
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
	public function listarSucursalesModel()
	{
		$sql="SELECT * FROM";
		$this->stmt = $this->conectar()->prepare($sql);
		$this->stmt->execute();
		$datos = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		return $datos;
	}
	

	public function registrarSucursalesModel()
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


	public function modificarSucursalesModel()
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

	public function borrarSucursalesModel()
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