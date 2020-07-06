<?php
    require_once ("Conexion.php");
    include_once("aplicationObjet.php");
    class managementAplicationObjet extends Conexion{
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
                //como vamos a crear el objeto "aplication" vamos a modificar sus propiedades
                //esto es mediante los metodos de acceso Setter
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
                    $aplication->setDadName($row["DadName"]);
                    $aplication->setDadEmployment($row["DadEmployment"]);
                    $aplication->setDadWorkplace($row["DadWorkplace"]);
                    $aplication->setMomName($row["MomName"]);
                    $aplication->setMomEmployment($row["MomEmployment"]);
                    $aplication->setMomWorkplace($row["MomWorkplace"]);
                    $aplication->setTutorName($row["TutorName"]);
                    $aplication->setTutorEmployment($row["TutorEmployment"]);
                    $aplication->setTutorWorkplace($row["TutorWorkplace"]);
                    $aplication->setWhoIncome($row["WhoIncome"]);
                    $aplication->setIncome($row["Income"]);
                    $aplication->setEmail($row["Email"]);
                    $aplication->setPhone($row["Phone"]);
                    $aplication->setPhone2($row["Phone2"]);
                    $aplication->setSign($row["Sign"]);
                    $aplication->setSignName($row["SignName"]);
                    $aplication->setDocCurp($row["DocCurp"]);
                    $aplication->setDocScore($row["DocScore"]);
                    $aplication->setDocProofAddress($row["DocProofAddress"]);
                    $aplication->setDocIdentificationTutor($row["DocIdentificationTutor"]);
                    $aplication->setStatus($row["Status"]);

                    //llenado de la matriz con objetos
                    $matrizAplicationObject[$count] = $aplication;
                    $count++;
                }

                return $matrizAplicationObject;

            } catch(Exception $ex){
                echo "La linea del error es: " . $ex->getLine() . $ex->getMessage();
            }

            $this->conexionDB = null;
        }

        public function setInsertAplication(aplicationObjet $aplication){
            try {
                //code...
                $sql = "INSERT INTO aplication () 
                VALUES (NULL, '" . $aplication->getName() . "','" . $aplication->getFirstLastName() . "','" . $aplication->getSecondLastName() . "','" . $aplication->getCurp() . "','" . $aplication->getAge() . "','" . $aplication->getStreet() . "','" . $aplication->getNumber() . "','" . $aplication->getSuburb() . "','" . $aplication->getIdLocality() . "','" . $aplication->getLevel() . "','" . $aplication->getGrade() . "','" . $aplication->getTurn() . "','" . $aplication->getScore() . "','" . $aplication->getIdSchool() . "','" . $aplication->getIdSchoolLocal() . "','" . $aplication->getDadName() . "','" . $aplication->getDadEmployment() . "','" . $aplication->getDadWorkplace() . "','" .$aplication->getMomName() . "','" . $aplication->getMomEmployment() . "','" . $aplication->getMomWorkplace() . "','" . $aplication->getTutorName() . "','" . $aplication->getTutorEmployment() . "','" . $aplication->getTutorWorkplace() . "','" . $aplication->getWhoIncome() . "','" . $aplication->getIncome() . "','" . $aplication->getEmail() . "','" . $aplication->getPhone() . "','" . $aplication->getPhone2() . "','" . $aplication->getSign() . "','" . $aplication->getSignName() . "','" . $aplication->getDocCurp() . "','" . $aplication->getDocScore() . "','" . $aplication->getDocProofAddress() . "','" . $aplication->getDocIdentificationTutor() . "','" . $aplication->getStatus() . "')";

                /*INSERT INTO aplication (`Id`, `Name`, `FirstLastName`, `SecondLastName`, `CURP`, `Age`, `Street`, `Number`, `Suburb`, `IdLocality`, `Level`, `Grade`, `Turn`, `Score`, `IdSchool`, `IdSchoolLocal`, `DadName`, `DadEmployment`, `DadWorkplace`, `MomName`, `MomEmployment`, `MomWorkplace`, `TutorName`, `TutorEmployment`, `TutorWorkplace`, `WhoIncome`, `Income`, `Email`, `Phone`, `Phone2`, `Sign`, `SignName`, `DocCurp`, `DocScore`, `DocProofAddress`, `DocIdentificationTutor`, `Status`) 
                VALUES (NULL, 'Luis', 'Rivera', 'Cervantes', 'RICL890215HGTRS04', '25', 'la calle', '25', '', '25', 'S', '9', 'V', '85', '10', '25', 'Papa de luis', 'pocero', 'en todos lados', 'Luis mama', 'cada ama', 'su casa de luis', '', '', '', 'P', '10000', 'luis@gmail.com', '4121578041', '', 'Madre', 'Luis mama firma', 'RICLcurp.pdf', 'RICLboleta.pdf', 'RICLcfe.pdf', 'RICLine.pdf', '1');*/

                $sentencia = $this->conexionDB->prepare($sql);
                $sentencia->execute();
            } catch(Exception $ex){
                Die ("Error: " . $ex->getLine() . $ex->getMessage());
            }
        }
    }

?>