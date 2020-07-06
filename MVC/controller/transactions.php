<?php
    require_once ("../model/aplicationObjet.php");
    require_once ("../model/managementAplicationObjet.php");

    echo $dircurp = $_POST['CurpAlumno'];
    echo "<br />";
    echo $nameCurp = $_FILES['docCurp']['name'];
    echo "<br />";
    echo $typeCurp = $_FILES['docCurp']['type'];
    echo "<br />";
    echo $sizeCurp = $_FILES['docCurp']['size'];
    echo "<br />";
    echo $tmpNameCurp = $_FILES['docCurp']['tmp_name'];
    echo "<br />";


    //Path de la carpeta destino del Server
    echo $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/SolicitudBeca/MVC/view/uploads/' . $dircurp . '/';
    echo "<br />";
    echo $target_file = $target_dir . basename($nameCurp);
    echo "<br />";
    echo $uploadOk = 1;
    echo "<br />";
    echo $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    echo "<br />";
    echo "ruta en la DB";
    echo $targetDB = $dircurp. '/' .basename($nameCurp);

    //Crear directorio para carga de documentos
    if (mkdir($target_dir, 0700)==1){
        echo "Directorio creado correctamente";
    }
    else {
        echo "Error El directorio no se creó";
    }

    //mover el archivo del directorio temporal en el SERVER donde se carga por primera vez el archivo
    //a el directorio que en definitiva va a estar

    if(move_uploaded_file($tmpNameCurp, $target_file)==1)
    {
        try {
            //---------------- Información de Alumno -----------------------------------
            echo $nombreAlumno = htmlentities(addslashes(trim($_POST['nombreAlumno'])), ENT_QUOTES);
            echo "<br />";
            echo $primerApellidoAlumno = htmlentities(addslashes(trim($_POST['primerApellidoAlumno'])), ENT_QUOTES);
            echo "<br />";
            echo $segundoApellidoAlumno = htmlentities(addslashes(trim(isset($_POST['segundoApellidoAlumno']) ? $_POST['segundoApellidoAlumno'] : null)), ENT_QUOTES);
            echo "<br />";
            echo $edadAlumno = htmlentities(addslashes(trim($_POST['EdadAlumno'])), ENT_QUOTES);
            echo "<br />";
            echo $curpAlumno = htmlentities(addslashes(trim($_POST['CurpAlumno'])), ENT_QUOTES);
            echo "<br />";
            echo $calle = htmlentities(addslashes(trim($_POST['Calle'])), ENT_QUOTES);
            echo "<br />";
            echo $numero = htmlentities(addslashes(trim($_POST['Numero'])), ENT_QUOTES); 
            echo "<br />";
            echo $coloniaAlumno = htmlentities(addslashes(trim($_POST['ColoniaAlumno'])), ENT_QUOTES);
            echo "<br />";
            echo $idLocalidadAlumno = intval($_POST['LocalidadAlumno']);
            echo "<br />";

            // ---------------- Información de la Escuela -------------------------------
            echo $nivel = isset($_POST['Nivel']) ? $_POST['Nivel'] : "P";
            echo "<br />";
            echo $grado = $_POST['Grado'];
            echo "<br />";
            echo $turno = isset($_POST['Turno']) ? $_POST['Turno'] : "M";
            echo "<br />";
            echo $promedio = $_POST['Promedio'];
            echo "<br />";
            echo $idEscuela = intval(isset($_POST['Escuela']) ? $_POST['Escuela'] : 1 );
            echo "<br />";
            echo $idLocalidadEscuela = intval(isset($_POST['LocalidadEscuela']) ? $_POST['LocalidadEscuela'] : 1);
            echo "<br />";

            // ---------------- Información del padre-----------------------------------
            echo $padre =isset($_POST['NombrePadre']) ? $_POST['NombrePadre'] : null;
            echo "<br />";
            echo $ocupacionPadre = isset($_POST['OcupacionPadre']) ? $_POST['OcupacionPadre'] : null;
            echo "<br />";
            echo $trabajoPadre = isset($_POST['TrabajoPadre']) ? $_POST['TrabajoPadre'] : null;
            echo "<br />";

            // ---------------- Información de la madre---------------------------------
            echo $madre = isset($_POST['NombreMadre']) ? $_POST['NombreMadre'] : null;
            echo "<br />";
            echo $ocupacionMadre = isset($_POST['OcupacionMadre']) ? $_POST['OcupacionMadre'] : null;
            echo "<br />";
            echo $trabajoMadre = isset($_POST['TrabajoMadre']) ? $_POST['TrabajoMadre'] : null;
            echo "<br />";


            // ---------------- Información del Tutor-----------------------------------
            echo $tutor = isset($_POST['Tutor']) ? $_POST['Tutor'] : null;
            echo $ocupacionTutor = isset($_POST['OcupacionTutor']) ? $_POST['OcupacionTutor'] : null;
            echo $trabajoTutor = isset($_POST['TrabajoTutor']) ? $_POST['TrabajoTutor'] : null;

            // ---------------- Información de ingreso monetario al hogar----------------
            echo $quienAportaIngreso = isset($_POST['QuienAportaIngreso']) ? $_POST['QuienAportaIngreso'] : null;
            echo $ingreso = floatval($_POST['Ingreso']);

            // ---------------- Información de contacto----------------------------------
            echo $email = isset($_POST['Email']) ? $_POST['Email'] : null;
            echo $telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : null;
            echo $telefonoAdicional = isset($_POST['TelefonoAdicional']) ? $_POST['TelefonoAdicional'] : null;

            // ---------------- Información de persona que proporciona la info-----------
            echo $quienDaInformacion = isset($_POST['QuienDaInformacion']) ? $_POST['QuienDaInformacion'] : "M" . "<br>";
            echo $nombreQuienDaInformacion = isset($_POST['NombreQuienDaInformacion']) ? $_POST['NombreQuienDaInformacion'] : null;  

            $status = 1;

            //code...
            $managementAplication = new managementAplicationObjet();
            $aplication = new aplicationObjet();


            //Cachar  los valores que vienen del formunlario y mandarlo al objeto
            $aplication->setName($nombreAlumno);
            $aplication->setFirstLastName($primerApellidoAlumno);
            $aplication->setSecondLastName($segundoApellidoAlumno);
            $aplication->setCurp($curpAlumno);
            $aplication->setAge($edadAlumno);
            $aplication->setStreet($calle);
            $aplication->setNumber($numero);
            $aplication->setSuburb($coloniaAlumno);
            $aplication->setIdLocality($idLocalidadAlumno);
            $aplication->setLevel($nivel);
            $aplication->setGrade($grado);
            $aplication->setTurn($turno);
            $aplication->setScore($promedio);
            $aplication->setIdSchool($idEscuela);
            $aplication->setIdSchoolLocal($idLocalidadEscuela);
            $aplication->setDadName($padre);
            $aplication->setDadEmployment($ocupacionPadre);
            $aplication->setDadWorkplace($trabajoPadre);
            $aplication->setMomName($madre);
            $aplication->setMomEmployment($ocupacionMadre);
            $aplication->setMomWorkplace($trabajoMadre);
            $aplication->setTutorName($tutor);
            $aplication->setTutorEmployment($ocupacionTutor);
            $aplication->setTutorWorkplace($trabajoTutor);
            $aplication->setWhoIncome($quienAportaIngreso);
            $aplication->setIncome($ingreso);
            $aplication->setEmail($email);
            $aplication->setPhone($telefono);
            $aplication->setPhone2($telefonoAdicional);
            $aplication->setSign($quienDaInformacion);
            $aplication->setSignName($nombreQuienDaInformacion);
            $aplication->setDocCurp($targetDB);
            $aplication->setStatus($status);
            
            
            
            echo "vlaores set <br />";
            var_dump($aplication);
            $managementAplication->setInsertAplication($aplication);
            echo "<br /> guardado";
        }catch(Exception $ex){
            echo "Error Transaction: " . $ex->getLine() . $ex->getMessage();
        }
    }else
    {
        Echo "no se pudo cargar el archivo, no se guardo rigistros en la BD";
    }

        
            
        

        
    

    
    /*

    

    




    


    // ---------------- Documentos requeridos------------------------------------
    echo $nameCurp = $_FILES['docCurp']['name'];
    echo $typeCurp = $_FILES['docCurp']['type'];
    echo $sizeCurp = $_FILES['docCurp']['size'];*/

       


?>