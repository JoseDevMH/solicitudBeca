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

    //* ---------------- Información de la Escuela -------------------------------
    echo $nivel = isset($_POST['Nivel']) ? $_POST['Nivel'] : "P" . "<br>";
    echo $grado = $_POST['Grado'] . '<br>';
    echo $turno = isset($_POST['Turno']) ? $_POST['Turno'] : "M" . "<br>";
    echo $promedio = $_POST['Promedio'] . '<br>';
    echo $idEscuela = $_POST['Escuela'] . '<br>';
    echo $idLocalidad = isset($_POST['LocalidadEscuela']) ? $_POST['LocalidadEscuela'] : 1 . "<br>";

    // ---------------- Información del padre-----------------------------------
    echo $padre = isset($_POST['NombrePadre']) ? $_POST['NombrePadre'] : null;
    echo $ocupacionPadre = isset($_POST['OcupacionPadre']) ? $_POST['OcupacionPadre'] : null;
    echo $trabajoPadre = isset($_POST['TrabajoPadre']) ? $_POST['TrabajoPadre'] : null;

    // ---------------- Información de la madre---------------------------------
    echo $madre = isset($_POST['NombreMadre']) ? $_POST['NombreMadre'] : null;
    echo $ocupacionMadre = isset($_POST['OcupacionMadre']) ? $_POST['OcupacionMadre'] : null;
    echo $trabajoMadre = isset($_POST['TrabajoMadre']) ? $_POST['TrabajoMadre'] : null;

    // ---------------- Información del Tutor-----------------------------------
    echo $tutor = isset($_POST['Tutor']) ? $_POST['Tutor'] : null;
    echo $ocupacionTutor = isset($_POST['OcupacionTutor']) ? $_POST['OcupacionTutor'] : null;
    echo $trabajoTutor = isset($_POST['TrabajoTutor']) ? $_POST['TrabajoTutor'] : null;

    // ---------------- Información de ingreso monetario al hogar----------------
    echo $quienAportaIngreso = isset($_POST['QuienAportaIngreso']) ? $_POST['QuienAportaIngreso'] : null;
    echo $ingreso = isset($_POST['Ingreso']) ? $_POST['Ingreso'] : null;

    // ---------------- Información de contacto----------------------------------
    echo $email = isset($_POST['Email']) ? $_POST['Email'] : null;
    echo $telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : null;
    echo $telefonoAdicional = isset($_POST['TelefonoAdicional']) ? $_POST['TelefonoAdicional'] : null;
    
    // ---------------- Información de persona que proporciona la info-----------
    echo $quienDaInformacion = isset($_POST['QuienDaInformacion']) ? $_POST['QuienDaInformacion'] : "M" . "<br>";
    echo $nombreQuienDaInformacion = isset($_POST['NombreQuienDaInformacion']) ? $_POST['NombreQuienDaInformacion'] : null;  

    // ---------------- Documentos requeridos------------------------------------
    echo $nameCurp = $_FILES['docCurp']['name'];
    echo $typeCurp = $_FILES['docCurp']['type'];
    echo $sizeCurp = $_FILES['docCurp']['size'];

?>