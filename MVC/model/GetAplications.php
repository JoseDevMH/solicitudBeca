<?php
    require_once("managmentAplicationObjet.php");

    $aplication = New managmentAplicationObjet();
    $matriz=$aplication->getAplication();
    var_dump ($matriz);
    /*foreach ($matriz as $item) {
        # code...
        echo "<li>";
        echo $item['IdSchool'] . "   " . $item['Level'] . "   " . $item['School']  . "   " . $item['Address'];
        echo "</li>";
    }*/

?>