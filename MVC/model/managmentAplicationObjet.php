<?php
    require_once ("Conexion.php");
    include_once("aplicationObjet.php");
    class managmentAplicationObjet extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function getAplication(){
            try {
                //code...
                $matrizAplicationObject = array();
                $count = 0;

                $sql = "SELECT * FROM aplication";
                $sentencia = $this->conexionDB->prepare($sql);
                $sentencia->execute();

                // Crear un objetos aplication con los registros que arroje la sentancia SQL
                while ($row = $resultado = $sentencia->fetch(PDO::FETCH_ASSOC)){
                    $aplication = new aplicationObjet(); //instanciamos o creamos el objeto aplication
                    $aplication->setId($row["Id"]);
                    $aplication->setName($row["Name"]);
                    $aplication->setFirstLastName($row["FirstLastName"]);
                    $aplication->setSecondLastName($row["SecondLastName"]);                    
                    $aplication->setCurp($row["CURP"]);
                    $aplication->setAge($row["Age"]);
                    $aplication->setStreet($row["Street"]);
                    $aplication->setNumber($row["Number"]);
                    $aplication->setSuburb($row["Suburb"]);
                    $aplication->setIdLocality($row["IdLocality"]);
                    $aplication->setLevel($row["Level"]);
                    $aplication->setGrade($row["Grade"]);
                    $aplication->setTurn($row["Turn"]);
                    $aplication->setScore($row["Score"]);
                    $aplication->setIdSchool($row["IdSchool"]);
                    $aplication->setIdSchoolLocal($row["IdSchoolLocal"]);
                    

                    //llenado de la matriz con objetos
                    $matrizAplicationObject[$count] = $aplication;
                    $count++;
                }

                return $matrizAplicationObject;

                
            } catch(Exception $ex){
                echo "La linea del error es: " . $ex->getLine() . $ex->getMessage();
            }
            

            /*$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            //var_dump($resultado);
            return $resultado;*/
            $this->conexionDB = null;
        }

        public function setAplication(){
            
        }
    }

?>