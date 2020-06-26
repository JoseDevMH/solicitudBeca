<?php
    require_once("Schools.php");

    $school = New Schools();
    $matrizSchools=$school->getSchool();
    /*<?php foreach($matrizLocalities as $item): ?>
        <li> <?php echo $item['IdLocality'] . ' - ' . $item['Locality']; ?>
       </li>
        <?php endforeach; ?>*/
    //echo var_dump ($matrizLocalities);
    foreach ($matrizSchools as $item) {
        # code...
        echo "<li>";
        echo $item['IdSchool'] . "   " . $item['Level'] . "   " . $item['School']  . "   " . $item['Address'];
        echo "</li>";
    }

?>