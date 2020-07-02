<?php
    require_once ("Conexion.php");
    //include_once("aplicationObjet.php");
    class managmentAplicationObjet extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function getAplication(){
            $sql = "SELECT * FROM aplication";
            $sentencia = $this->conexionDB->prepare($sql);
            $sentencia->execute(array());
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            //var_dump($resultado);
            return $resultado;
            $this->conexionDB = null;
        }

        public function setAplication(){
            
        }
    }

?>