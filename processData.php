<?php
    //* ---------------- Información de Alumno -----------------------------------
    echo $nombreAlumno = $_POST['nombreAlumno'] . '<br>';
    echo $primerApellidoAlumno = $_POST['primerApellidoAlumno'] . '<br>';
    echo $segundoApellidoAlumno = $_POST['segundoApellidoAlumno'] . '<br>';
    echo $edadAlumno = $_POST['EdadAlumno'] . '<br>';
    echo $curpAlumno = $_POST['CurpAlumno'] . '<br>';
    echo $calle = $_POST['Calle'] . '<br>';
    echo $numero = isset($_POST['Numero']) ? $_POST['Numero'] : null;
  
    echo $coloniaAlumno = $_POST['ColoniaAlumno'] . '<br>';
    echo $localidadAlumno = $_POST['Localidad'] . '<br>';

    //* ---------------- Información de la Escuela -----------------------------------
    echo $Nivel = isset($_POST['Nivel']) ? $_POST['Nivel'] : "P" . "<br>";
    echo $grado = $_POST['GradoEscolar'] . '<br>';
    echo $promedio = $_POST['PromedioAlumno'] . '<br>';
    echo $idEscuela = $_POST['Escuela'] . '<br>';
    echo $idLocalidad = isset($_POST['LocalidadEscuela']) ? $_POST['LocalidadEscuela'] : 1 . "<br>";
    echo $turno = isset($_POST['Turno']) ? $_POST['Turno'] : "M" . "<br>";

    // ---------------- Información de los Padres o Tutor-----------------------------------
    echo $padre = isset($_POST['NombreDelPadre']) ? $_POST['NombreDelPadre'] : null;
    echo $ocupacionPadre = isset($_POST['ocupacionPadre']) ? $_POST['ocupacionPadre'] : null;
    echo $trabajoPadre = isset($_POST['TrabajoDelPadre']) ? $_POST['TrabajoDelPadre'] : null;

    echo $Madre = isset($_POST['NombreDelaMadre']) ? $_POST['NombreDelaMadre'] : null;
    echo $ocupacionMadre = isset($_POST['ocupacionMadre']) ? $_POST['ocupacionMadre'] : null;
    echo $trabajoDelaMadre = isset($_POST['TrabajoDelaMadre']) ? $_POST['TrabajoDelaMadre'] : null;

    echo $Tutor = isset($_POST['Tutor']) ? $_POST['Tutor'] : null;
    echo $ocupacionTutor = isset($_POST['ocupacionTutor']) ? $_POST['ocupacionTutor'] : null;
    echo $trabajoTutor = isset($_POST['TrabajoDelTutor']) ? $_POST['TrabajoDelTutor'] : null;

    echo $Ingresos = isset($_POST['Ingresos']) ? $_POST['Ingresos'] : null;
    echo $email = isset($_POST['Email']) ? $_POST['Email'] : null;
    echo $Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : null;
    echo $TelefonoAdicional = isset($_POST['TelefonoAdicional']) ? $_POST['TelefonoAdicional'] : null;
    echo $QuienDaInformacion = isset($_POST['QuienDaInformacion']) ? $_POST['QuienDaInformacion'] : "M" . "<br>";
    echo $Informacion = isset($_POST['Informacion']) ? $_POST['Informacion'] : null;  

    echo $fileNameCurp = $_FILES['curp']['name'];
    echo $fileSizeCurp = $_FILES['curp']['size'];
    echo $fileTypeCurp = $_FILES['curp']['type'];

    echo $fileNameDomicilio = $_FILES['domicilio']['name'];
    echo $fileSizeDomicilio = $_FILES['domicilio']['size'];
    echo $fileTypeDomicilio = $_FILES['domicilio']['type'];

    echo $fileNameBoleta = $_FILES['boleta']['name'];
    echo $fileSizeBoleta = $_FILES['boleta']['size'];
    echo $fileTypeBoleta = $_FILES['boleta']['type'];

    $archivocurp = $_FILES['curp']['name'];
    $guardar = $_FILES['curp']['tmp_name'];
    $carpeta = '/documents/$curpAlumno';
    mkdir($carpeta, 0777, true);
    if(!file_exists($carpeta)){
    $destino = $carpeta.$_FILES['curp']['name'];
    copy($_FILES['curp']['tmp_name'], $destino);
    echo "Archivo subido exitosamente";
    }else{
        echo "Error al subir archivo";
    }

?>
