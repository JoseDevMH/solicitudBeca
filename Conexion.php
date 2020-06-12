<?php
/*$hostname = "localhost";
$database = "juventin_bolsa_empleo";
$username = "juventin_bolsa";
$password = "estaeslabolsadeempleo";*/


$hostname = "localhost";
$database = "bolsaempleo";
$username = "root";
$password = "";


/*
$conexion = mysqli_connect("127.0.0.1", $username, $password, $database);

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL!." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;

mysqli_close($conexion);
*/
class Conexion {

  protected $conexionDB;

  public function Conexion(){
      try{
        $this->conexionDB = new PDO('mysql:host=localhost; dbname=bolsaempleo', 'root', '');
        $this->conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexionDB->exec("SET CHARACTER SET UTF8");
        return $this->conexionDB;
      }
      catch(Exception $ex){
        echo "La linea del error es: " . $ex->getLine();
      }
  }

}


?>
