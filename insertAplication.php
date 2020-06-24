<?php
    //* ---------------- Información de Alumno -----------------------------------
    echo $nombreAlumno = $_POST['nombreAlumno'] . '<br>';
    echo $primerApellidoAlumno = $_POST['primerApellidoAlumno'] . '<br>';
    echo $segundoApellidoAlumno = $_POST['segundoApellidoAlumno'] . '<br>';
    echo $EdadAlumno = $_POST['EdadAlumno'] . '<br>';
    echo $CurpAlumno = $_POST['CurpAlumno'] . '<br>';
    echo $Calle = $_POST['Calle'] . '<br>';
    echo $Numero = $_POST['Numero'] . '<br>';
    echo $ColoniaAlumno = $_POST['ColoniaAlumno'] . '<br>';
    echo $LocalidadAlumno = $_POST['LocalidadAlumno'] . '<br>';

    //* ---------------- Información de la Escuela -----------------------------------
    if (isset($_POST['Nivel'])){
        echo $_POST['Nivel'] . '<br>'; // Muestra el CheckBox marcado.
        }
    echo $GradoEscolar = $_POST['GradoEscolar'] . '<br>';
    echo $PromedioAlumno = $_POST['PromedioAlumno'] . '<br>';
    echo $NombreEscuela = $_POST['NombreEscuela'] . '<br>';
    echo $LocalidadEscuela = $_POST['LocalidadEscuela'] . '<br>';
    if (isset($_POST['Turno'])){
        echo $_POST['Turno'] . '<br>'; // Muestra el CheckBox marcado.
        }

    //* ---------------- Información de los Padres o Tutor-----------------------------------
    echo $NombreDelPadre = $_POST['NombreDelPadre'] . '<br>';
    echo $ocupacionPadre = $_POST['ocupacionPadre'] . '<br>';
    echo $TrabajoDelPadre = $_POST['TrabajoDelPadre'] . '<br>';
    echo $NombreDelaMadre = $_POST['NombreDelaMadre'] . '<br>';
    echo $ocupacionMadre = $_POST['ocupacionMadre'] . '<br>';
    echo $TrabajoDelaMadre = $_POST['TrabajoDelaMadre'] . '<br>';
    echo $Tutor = $_POST['Tutor'] . '<br>';
    echo $ocupacionTutor = $_POST['ocupacionTutor'] . '<br>';
    echo $TrabajoDelTutor = $_POST['TrabajoDelTutor'] . '<br>';
    if (isset($_POST['Padres'])){
        echo $_POST['Padres'] . '<br>'; // Muestra el CheckBox marcado.
        }
    echo $Ingresos = $_POST['Ingresos'] . '<br>';
    echo $Email = $_POST['Email'] . '<br>';
    echo $Telefono = $_POST['Telefono'] . '<br>';
    if (isset($_POST['InformacionPadres'])){
        echo $_POST['InformacionPadres'] . '<br>'; // Muestra el CheckBox marcado.
        }
    echo $Informacion = $_POST['Informacion'] . '<br>';

?>
