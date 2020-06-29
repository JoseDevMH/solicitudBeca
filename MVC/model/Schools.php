<?php

    require_once ("Conexion.php");

    class Schools extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function getSchool(){
            $sql = "SELECT * FROM schools";
            $sentencia = $this->conexionDB->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            //var_dump($resultado);
            return $resultado;
            $this->conexionDB = null;
        }
    }
    

?>