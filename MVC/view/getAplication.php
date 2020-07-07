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
                $edad = $item->getAge();
                $calle = $item->getStreet();
                $numero = $item->getNumber();
                $colonia = $item->getSuburb();
                $localidad = $item->getIdLocality();
                $nivel = $item->getLevel();
                $grado = $item->getGrade();
                $turno = $item->getTurn();
                $promedio = $item->getScore();
                $escuela = $item->getIdSchool();
                $localidadEscuela = $item->getIdSchoolLocal();
                $papa = $item->getDadName();
                $ocupacionPapa = $item->getDadEmployment();
                $lugarTrabajoPapa = $item->getDadWorkplace();
                $mama = $item->getMomName();
                $ocupacionMama = $item->getMomEmployment();
                $lugarTrabajoMama = $item->getMomWorkplace();
                $tutor = $item->getTutorName();
                $ocupacionTutor = $item->getTutorEmployment();
                $lugarTrabajoTutor = $item->getTutorWorkplace();
                $quienIngresa = $item->getWhoIncome();
                $ingreso = $item->getIncome();
                $correo = $item->getEmail();
                $tel1 = $item->getPhone();
                $tel2 = $item->getPhone2();
                $quienInforma = $item->getSign();
                $nombreInforma = $item->getSignName();
                $docCurp = $item->getDocCurp();
                $docBoleta = $item->getDocScore();
                $docDomicilio = $item->getDocProofAddress();
                $docIdentificacion = $item->getDocIdentificationTutor();
                $status = $item->getStatus();
            
            }

        ?>

                    <div class="card">
                        <div class="card-header">
                        <h3>Información del Alumno</h3>
                        </div>
                        <div class="card-body">
                        <div class="row">                            
                            <div class="col-md-6">
                            
                                <label class="font-weight-bold" >Nombre: </label>
                                <?php echo $nombre . ' ' , $primerApellido . ' ' . $segundoApellido; ?>
                            
                            </div>

                            <div class="col-md-4">
                            
                                <label class="font-weight-bold" >CURP: </label>
                                <?php echo $curp; ?>
                            
                            </div>

                            <div class="col-md-2">
                            
                                <label class="font-weight-bold" >Edad: </label>
                                <?php echo $edad; ?>
                            
                            </div>
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
                            <label class="font-weight-bold" for="num_exA">Turno: </label>
                            <?php echo $turno; ?>
                            </div>
                            <div class="form-group col-3">
                            <label class="font-weight-bold" for="num_exA">Promedio: </label>
                            <?php echo $promedio; ?>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <label class="font-weight-bold">Escuela</label>
                                <?php echo $escuela; ?>
                            </div>
                            <div class="col-md-7">
                                <label class="font-weight-bold">Dirección de la Escuela</label>
                                <?php echo $localidadEscuela; ?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <hr>
                    </hr>

                    <div class="card">
                        <div class="card-header">
                        <h3>Información de Padre, Madre y Tutor</h3>
                        </div>
                        <div class="card-body">
                        <div class="row">                            
                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Nombre de Papa: </label>
                                <?php echo $papa; ?>                            
                            </div>

                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Ocupación: </label>
                                <?php echo $ocupacionPapa; ?>                            
                            </div>

                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Lugar de Trabajo: </label>
                                <?php echo $lugarTrabajoPapa; ?>                            
                            </div>
                        </div>
                        
                        <div class="row">                            
                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Nombre de Mamá: </label>
                                <?php echo $mama; ?>                            
                            </div>

                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Ocupación: </label>
                                <?php echo $ocupacionMama; ?>                            
                            </div>

                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Lugar de Trabajo: </label>
                                <?php echo $lugarTrabajoMama; ?>                            
                            </div>
                        </div>

                        <div class="row">                            
                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Nombre de Tutor: </label>
                                <?php echo $tutor; ?>                            
                            </div>

                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Ocupación: </label>
                                <?php echo $ocupacionTutor; ?>                            
                            </div>

                            <div class="col-md-4">                            
                                <label class="font-weight-bold" >Lugar de Trabajo: </label>
                                <?php echo $lugarTrabajoTutor; ?>                            
                            </div>
                        </div>                        
                        </div>
                    </div>
                    <hr>
                    </hr>

                    <div class="card">
                        <div class="card-header">
                        <h3>Información de Ingreso</h3>
                        </div>
                        <div class="card-body">
                        <div class="row">                            
                            <div class="col-md-6">                            
                                <label class="font-weight-bold" >Quien Aporta el Ingreso en la Familia: </label>
                                <?php echo $quienIngresa; ?>                            
                            </div>

                            <div class="col-md-6">                            
                                <label class="font-weight-bold">Ingreso total al mes: </label>
                                <?php echo $ingreso; ?>                            
                            </div>
                        </div>                                                
                        </div>
                    </div>
                    <hr>
                    </hr>

                    <div class="card">
                        <div class="card-header">
                        <h3>Información de contacto</h3>
                        </div>
                        <div class="card-body">
                        <div class="row">                            
                            <div class="col-md-6">                            
                                <label class="font-weight-bold" >Correo: </label>
                                <?php echo $correo; ?>                            
                            </div>

                            <div class="col-md-3">                            
                                <label class="font-weight-bold">Telefóno: </label>
                                <?php echo $tel1; ?>                            
                            </div>

                            <div class="col-md-3">                            
                                <label class="font-weight-bold">Telefóno 2: </label>
                                <?php echo $tel2; ?>                            
                            </div>
                        </div>

                        <div class="row">                            
                            <div class="col-md-5">                            
                                <label class="font-weight-bold">Quien proporciona la Información: </label>
                                <?php echo $quienInforma; ?>                            
                            </div>

                            <div class="col-md-7">                            
                                <label class="font-weight-bold">Nombre: </label>
                                <?php echo $nombreInforma; ?>                            
                            </div>
                        </div>

                        </div>
                    </div>
                    <hr>
                    </hr>

                    <div class="card">
                        <div class="card-header">
                        <h3>Documentació<noscript></noscript></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">                            
                                <div class="col-12">                            
                                    <label class="font-weight-bold" >CURP: </label>
                                    <?php echo $docCurp; ?>                            
                                </div>                            
                            </div>
                            <div class="row">                            
                                <div class="col-12">                            
                                    <label class="font-weight-bold" >Boleta de Calificaciones: </label>
                                    <?php echo $docBoleta; ?>                            
                                </div>                            
                            </div>
                            <div class="row">                            
                                <div class="col-12">                            
                                    <label class="font-weight-bold" >Comprobante de Domicilio: </label>
                                    <?php echo $docDomicilio; ?>                            
                                </div>                            
                            </div>
                            <div class="row">                            
                                <div class="col-12">                            
                                    <label class="font-weight-bold" >Identificación de la persona que solicita (Mayor de Edad): </label>
                                    <?php echo $docIdentificacion; ?>                            
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
