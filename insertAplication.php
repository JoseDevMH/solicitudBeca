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
    echo $localidadAlumno = $_POST['LocalidadAlumno'] . '<br>';

    //* ---------------- Información de la Escuela -----------------------------------
    echo $nivel = $_POST['Nivel'] . '<br>';
    echo $grado = $_POST['GradoEscolar'] . '<br>';
    echo $promedio = $_POST['PromedioAlumno'] . '<br>';
    echo $idEscuela = $_POST['Escuela'] . '<br>';
    echo $idLocalidad = isset($_POST['LocalidadEscuela']) ? $_POST['LocalidadEscuela'] : 1 . "<br>";
    echo $turno = isset($_POST['Turno']) ? $_POST['Turno'] : "M" . "<br>";

    // ---------------- Información de los Padres o Tutor-----------------------------------
    echo $padre = isset($_POST['NombreDelPadre']) ? $_POST['NombreDelPadre'] : null;
    echo $ocupacionPadre = isset($_POST['ocupacionPadre']) ? $_POST['ocupacionPadre'] : null;
    echo $trabajoPadre = isset($_POST['TrabajoDelPadre']) ? $_POST['TrabajoDelPadre'] : null;
    
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
