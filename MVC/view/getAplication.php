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
                $edad = $item->getAge();
                $curp = $item->getCurp();
                $calle = $item->getStreet();
                $numero = $item->getNumber();
                $colonia = $item->getSuburb();
                $nivel = $item->getLevel();
                $grado = $item->getGrade();
                $promedio = $item->getScore();
                $escuela = $item->getIdSchool();
                $localidad = $item->getIdLocality();
                $ingreso = $item->getIncome();
                
            
            }

        ?>

                    <div class="card">
                        <div class="card-header">
                        <h3>Información del Alumno</h3>
                        </div>
                        <div class="card-body">
                        <div class="row">                            
                            <div class="col-md-6">
                            
                                <label class="font-weight-bold" for="nombrerA">Nombre: </label>
                                <?php echo $nombre . ' ' , $primerApellido . ' ' . $segundoApellido; ?>
                            
                            </div>

                            <div class="col-md-4">
                            
                                <label class="font-weight-bold" for="curp">CURP: </label>
                                <?php echo $curp; ?>
                            
                            </div>

                            <div class="col-md-2">
                            
                                <label class="font-weight-bold" for="edadA">Edad: </label>
                                <?php echo $edad; ?>
                            
                            </div>
                        </div>                       
                        <div class="row">
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                            <label class="font-weight-bold" for="calle">Domicilio: </label>
                            <?php echo $calle . ' ' . $numero . ' ' . $colonia . ' ' . $localidad; ?>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="form-group col-3">
                            <label class="font-weight-bold" for="calle">Nivel: </label>
                            <?php echo $nivel; ?>
                            </div>
                            <div class="form-group col-3">
                            <label class="font-weight-bold" for="num_exA">Grado: </label>
                            <?php echo $grado; ?>
                            </div>
                            <div class="form-group col-3">
                            <label class="font-weight-bold" for="num_exA">Promedio: </label>
                            <?php echo $promedio; ?>
                            </div>
                            <div class="form-group col-3">
                            <label class="font-weight-bold" for="num_exA">Ingresos: </label>
                            <?php echo $ingreso; ?>
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
