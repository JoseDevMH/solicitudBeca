<?php
  include_once("includes/start.php");
?>

  <!--Contenido de la pagina ///////////////////////////////////////////////-->
  <div class="container mt-3 mb-3">
    <h1>Coordinación de Educación Municipal</h1>
    <h2>Solitud de Paquetes Escolares</h2>
    <p>Estos paquetes son para Niviles de Primaria y Secundaria</p>
    <p class="campoObligatorio">Los datos marcados con * son obligatorios</p>
    <form class="form" method="POST" action="processDocuments.php" enctype="multipart/form-data">

        <div class="card">
            <div class="card-header">
                <h3>Información del Alumno</h3>
            </div>
            <div class="card-body">
                <div class="row">                    
                    <div class="col-md-9">
                        <div class="form-group">
                            <label class="font-weight-bold" for="curp">CURP: <span class="campoObligatorio">*</span></label>
                            <input type="text" class="form-control" maxlength="18" id="curp" placeholder="CURP" name="CurpAlumno"
                            required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="font-weight-bold" for="edadA">Edad: <span class="campoObligatorio">*</span></label>
                            <input type="text" class="form-control" id="edadA" placeholder="Cuantos años tienes" name="EdadAlumno"
                            maxlength="2" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr></hr>
        <div class="card">
            <div class="card-header">
                <h5>Documentos Requeridos</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="font-weight-bold text-uppercase" for="curp">CURP del Estudiante <span class="campoObligatorio">*</span></label>
                    <input type="file" name="docCurp" class="form-control-file" id="docCurp" required>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-12 justify-content-center">
                <input type="submit" class="col-12 btn btn-warning btn-block" value="Enviar Solitud">
            </div>
        </div>

    </form>
  </div>

  <!--fin Contenido de la pagina ///////////////////////////////////////////////-->

<?php include_once("includes/end.php"); ?>