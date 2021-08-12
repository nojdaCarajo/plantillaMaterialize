<?php 
class Conexion
{
	private $driver  = "pgsql";
	private $host = "localhost";
	private $bd = "pruebas";
	private $port  = "5432";
	private $username  = "postgres";
	private $passwor = "123";
	private $dbh;
  public $key; 
public   $tabla; 
public   $campo; 
public   $plazas;
    public function conectar()
    {

        try {





            $this->dbh = new PDO($this->driver.":host=".$this->host.";port=".$this->port.";dbname=".$this->bd."" ,$this->username, $this->passwor);

            //$this->dbh = new PDO('mysql:host=localhost; dbname=laPollera', 'root', '');
            return $this->dbh;

        } catch (Exception $e) {
            die("Error: " . $e->Getmessage());
        }

    }


    #GENERARDOR DE CODIGO
    #---------------------------------------

    public function generarCodigo($key,$tabla,$campo,$plazas)
    {

      

       $this->stmt = $this->conectar()->prepare("SELECT max($campo) as numero FROM $tabla");
       $this->stmt->execute();
       $comp =  $this->stmt->fetch();
       $numero = $comp["numero"];
       $numero ++;



       $numeroLong= strlen($numero);
       $plazasLong= strlen($plazas);
       $cor=$plazas;
       for ($i=0; $i <= $numeroLong ; $i++) { 
        $cor= substr($plazas, 0, -$i);
        
    }



    $codigo = $key.$cor.$numero;


    return strtoupper($codigo);
}





}

?>