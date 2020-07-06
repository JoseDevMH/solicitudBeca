<?php
  include_once("includes/start.php");
?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <br />
        <h2>Lista de Solicitudes de Paquetes de Utiles Escolares</h2>
        <br />

         

        <?php
            require_once("../model/managementAplicationObjet.php");
            require_once("../model/aplicationObjet.php");
            $aplication = New managementAplicationObjet();
            $id = $_GET['Id'];
            $matriz=$aplication->getAplicationId($id);
            //var_dump ($matriz);
            foreach ($matriz as $item){                      
                

                $id = $item->getId() ;
                $fecha = $item->getDateAplication();
                $nombre = $item->getName();
                $primerApellido = $item->getFirstLastName();
                $segundoApellido = $item->getSecondLastName();
                $curp = $item->getCurp();
                $escuela = $item->getIdSchool();
                $localidad = $item->getIdLocality();
                
            
            }

        ?>

                    <div class="card">
                        <div class="card-header">
                        <h3>Información del Alumno</h3>
                        </div>
                        <div class="card-body">
                        <div class="row">
                            <div class="col-12 ">
                            <div class="col-12 ">
                            <div class="form-group inline-block">
                                <label class="font-weight-bold" for="nombrerA">Nombre: </label>
                                <?php echo $nombre; ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold" for="priApellido">Primer Apellido: </label>
                                <?php echo $primerApellido; ?>
                            </div>
                            </div>
                            <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold" for="segApellido">Segundo Apellido: </label>
                                <?php echo $segundoApellido; ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                            <div class="form-group">
                                <label class="font-weight-bold" for="edadA">Edad: </label>
                                <?php echo $primerApellido; ?>
                            </div>
                            </div>
                            <div class="col-md-9">
                            <div class="form-group">
                                <label class="font-weight-bold" for="curp">CURP: </label>
                                <?php echo $curp; ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-9">
                            <label class="font-weight-bold" for="calle">Calle: </label>
                            <?php echo $primerApellido; ?>
                            </div>
                            <div class="form-group col-3">
                            <label class="font-weight-bold" for="num_exA">Número Exterior: </label>
                            <?php echo $primerApellido; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                            <label class="font-weight-bold" for="colA">Colonia:</label>
                            <?php echo $primerApellido; ?>
                            </div>
                            
                            <div class="form-group col-md-6">
                            <label class="font-weight-bold" for="localA">Localidad: </label>
                            <?php echo $localidad; ?>
                                <!--//fin del select ////////////////////////////-->              
                            </div>
                        </div>
                        </div>
                    </div>
                    <hr>
                    </hr>

        </div>
    </div>
</div>
<?php include_once("includes/end.php"); ?>