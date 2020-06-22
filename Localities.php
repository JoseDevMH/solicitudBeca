<?php
    require_once("GetLocalities.php");

    $locality = New GetLocality();
    $matrizLocalities=$locality->getLocality();
    echo var_dump ($matrizLocalities);

?>