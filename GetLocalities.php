<?php
    require_once("Localities.php");

    $locality = New Localities();
    $matrizLocalities=$locality->getLocality();
    /*<?php foreach($matrizLocalities as $item): ?>
        <li> <?php echo $item['IdLocality'] . ' - ' . $item['Locality']; ?>
       </li>
        <?php endforeach; ?>*/
    //echo var_dump ($matrizLocalities);
    foreach ($matrizLocalities as $item) {
        # code...
        echo "<li>";
        echo $item['IdLocality'] . " , " . $item['Locality'];
        echo "</li>";
    }

?>