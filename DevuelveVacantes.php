<?php

    require "Conexion.php";

    class DevuelveVacantes extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function getVacantes(){
            $sql = "SELECT * FROM vacante";
            $sentencia = $this->conexionDB->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            var_dump($resultado);
            return $resultado;
            $this->conexionDB = null;
        }
    }
    

?>