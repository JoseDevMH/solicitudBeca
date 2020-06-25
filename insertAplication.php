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
    
    /*
    if (isset($_POST['NombreDelaMadre'])){
        echo $_POST['NombreDelaMadre'] : null . '<br>'; 
        }
    if (isset($_POST['ocupacionMadre'])){
        echo $_POST['ocupacionMadre'] : null . '<br>'; 
        }
    if (isset($_POST['TrabajoDelaMadre'])){
        echo $_POST['TrabajoDelaMadre'] : null . '<br>'; 
        }
    if (isset($_POST['Tutor'])){
        echo $_POST['Tutor'] : null . '<br>'; 
        }
    if (isset($_POST['ocupacionTutor'])){
        echo $_POST['ocupacionTutor'] : null . '<br>';
        }
    if (isset($_POST['TrabajoDelTutor'])){
            echo $_POST['TrabajoDelTutor'] : null . '<br>';
            }
    if (isset($_POST['Padres'])){
        echo $_POST['Padres'] . '<br>'; 
        }
    echo $Ingresos = $_POST['Ingresos'] : null . '<br>';
    echo $Email = $_POST['Email'] . '<br>';
    echo $Telefono = $_POST['Telefono'] : null . '<br>';
    if (isset($_POST['TelefonoAdicional'])){
        echo $_POST['TelefonoAdicional'] : null . '<br>'; 
        }
    if (isset($_POST['QuienDaInformacion'])){
        echo $_POST['QuienDaInformacion'] : null . '<br>'; 
        }
    echo $Informacion = $_POST['Informacion'] . '<br>';*/

?>
