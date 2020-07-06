<?php

$hostname = "localhost";
$database = "becas";
$username = "root";
$password = "";

class Conexion {

  protected $conexionDB;

  public function __construct(){
      try{
        $this->conexionDB = new PDO('mysql:host=localhost; dbname=becas', 'root', '');
        $this->conexionDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexionDB->exec("SET CHARACTER SET UTF8");
        return $this->conexionDB;
      }
      catch(Exception $ex){
        die ("Error: " . $ex->getLine() . $ex->getMessage());
      }
  }

}


?>
