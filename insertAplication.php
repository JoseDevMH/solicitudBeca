<?php
    //* ---------------- Información de Alumno -----------------------------------
    echo $nombreAlumno = $_POST['nombreAlumno'] . '<br>';
    echo $primerApellidoAlumno = $_POST['primerApellidoAlumno'] . '<br>';
    echo $segundoApellidoAlumno = $_POST['segundoApellidoAlumno'] . '<br>';
    echo $EdadAlumno = $_POST['EdadAlumno'] . '<br>';
    echo $CurpAlumno = $_POST['CurpAlumno'] . '<br>';
    echo $Calle = $_POST['Calle'] . '<br>';
    if (isset($_POST['Numero'])){
        echo $_POST['Numero'] : null . '<br>'; 
        }
    echo $ColoniaAlumno = $_POST['ColoniaAlumno'] . '<br>';
    echo $LocalidadAlumno = $_POST['LocalidadAlumno'] . '<br>';

    //* ---------------- Información de la Escuela -----------------------------------
    if (isset($_POST['Nivel'])){
        echo $_POST['Nivel'] . '<br>'; 
        }
    echo $GradoEscolar = $_POST['GradoEscolar'] . '<br>';
    echo $PromedioAlumno = $_POST['PromedioAlumno'] . '<br>';
    echo $NombreEscuela = $_POST['NombreEscuela'] . '<br>';
    if (isset($_POST['LocalidadEscuela'])){
        echo $_POST['LocalidadEscuela'] : null . '<br>'; 
        }
    if (isset($_POST['Turno'])){
        echo $_POST['Turno'] . '<br>'; 
        }

    //* ---------------- Información de los Padres o Tutor-----------------------------------
    if (isset($_POST['NombreDelPadre'])){
        echo $_POST['NombreDelPadre'] : null . '<br>'; 
        }
    if (isset($_POST['ocupacionPadre'])){
        echo $_POST['ocupacionPadre'] : null . '<br>'; 
        }
    if (isset($_POST['TrabajoDelPadre'])){
        echo $_POST['TrabajoDelPadre'] : null . '<br>'; 
        }
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
    echo $Ingresos = $_POST['Ingresos'] . '<br>';
    echo $Email = $_POST['Email'] . '<br>';
    echo $Telefono = $_POST['Telefono'] . '<br>';
    if (isset($_POST['QuienDaInformacion'])){
        echo $_POST['QuienDaInformacion'] . '<br>'; 
        }
    echo $Informacion = $_POST['Informacion'] . '<br>';

?>
