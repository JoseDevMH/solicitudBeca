<?php
  include_once("includes/start.php");
?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <br />
        <h2>Lista de Solicitudes de Paquetes de Utiles Escolares</h2>
        <br />
        <table class="table table-striped table-dark">
        <thead>
            <tr>            
            <th scope="col">Id</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">CURP</th>
            <th scope="col">Escuela</th>
            <th scope="col">Localidad</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            require_once("../model/managementAplicationObjet.php");
            require_once("../model/aplicationObjet.php");

            $aplication = New managementAplicationObjet();
            $listAplications=$aplication->getAplication();
            //var_dump ($matriz);
            if(!empty($listAplications)) {
                # code...
                foreach ($listAplications as $item){
                
                echo "<tr>";

                echo '<th scope="row">'. $item->getId() . '</th>';
                echo '<td>' . $item->getDateAplication() . '</td>'; 
                echo '<td>' . $item->getName() . '</td>';
                echo '<td>' . $item->getFirstLastName() . '</td>';
                echo '<td>' . $item->getSecondLastName() . '</td>';
                echo '<td>' . $item->getCurp() . '</td>';
                echo '<td>' . $item->getIdSchool() . '</td>';
                echo '<td>' . $item->getIdLocality() . '</td>';
                echo '<td><a class="linkNaranja" href="getAplication.php?Id=' . $item->getId() . '"> Ver más </a></td>';
                echo "</tr>";
               
                }
            }
            else {
                # code...
                echo "Lista de solicitudes Vacia";
            }

        ?>
        </tbody>
        </table>
            <a href="http://"></a>
        </div>
    </div>
</div>

<?php include_once("includes/end.php"); ?>