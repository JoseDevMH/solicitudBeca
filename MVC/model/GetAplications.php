<?php
    require_once("managementAplicationObjet.php");    
    $aplication = New managementAplicationObjet();
    $matriz=$aplication->getAplication();
    var_dump ($matriz);
    /*foreach ($matriz as $item) {
        # code...
        echo "<li>";
        echo $item['IdSchool'] . "   " . $item['Level'] . "   " . $item['School']  . "   " . $item['Address'];
        echo "</li>";
    }*/

?>