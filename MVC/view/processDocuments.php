<?php

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

    //Crear directorio para carga de documentos
    if (mkdir($target_dir, 0700)==1){
        echo "Directorio creado correctamente";
    }
    else {
        echo "Error El directorio no se creó";
    }

    //mover el archivo del directorio temporal en el SERVER donde se carga por primera vez el archivo
    //a el directorio que en definitiva va a estar

    move_uploaded_file($tmpNameCurp, $target_file);

?>