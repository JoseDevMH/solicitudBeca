<?php
  include_once("includes/start.php");
?>

  <!--Contenido de la pagina ///////////////////////////////////////////////-->
  <div class="container mt-3 mb-3">
    <h1>Coordinación de Educación Municipal</h1>
    <h2>Solitud de Paquetes Escolares</h2>
    <p>Estos paquetes son para Niviles de Primaria y Secundaria</p>
    <p class="campoObligatorio">Los datos marcados con * son obligatorios</p>
    <form class="form" method="POST" action="../controller/transactions.php" enctype="multipart/form-data">
      <div class="card">
        <div class="card-header">
          <h3>Información del Alumno</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 ">
              <div class="form-group inline-block">
                <label class="font-weight-bold" for="nombrerA">Nombre: <span class="campoObligatorio">*</span></label>
                <input type="text" class="form-control" placeholder="Nombre(s)" id="nombrerA" name="nombreAlumno"
                  maxlength="50" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="font-weight-bold" for="priApellido">Primer Apellido: </label>
                <input type="text" class="form-control" placeholder="Primer Apellido" id="priApellido"
                  name="primerApellidoAlumno" maxlength="50">
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="font-weight-bold" for="segApellido">Segundo Apellido: <span class="campoObligatorio">*</span></label>
                <input type="text" class="form-control" placeholder="Segundo Apellido" id="segApellido"
                  name="segundoApellidoAlumno" maxlength="50" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="font-weight-bold" for="edadA">Edad: <span class="campoObligatorio">*</span></label>
                <input type="text" class="form-control" id="edadA" placeholder="Cuantos años tienes" name="EdadAlumno"
                  maxlength="2" required>
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label class="font-weight-bold" for="curp">CURP: <span class="campoObligatorio">*</span></label>
                <input type="text" class="form-control" maxlength="18" id="curp" placeholder="CURP" name="CurpAlumno"
                  required><span class="campoObligatorio">*</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-9">
              <label class="font-weight-bold" for="calle">Calle: <span class="campoObligatorio">*</span></label>
              <input type="text" class="form-control" maxlength="40" id="calle" placeholder="Calle" name="Calle"
                required>
            </div>
            <div class="form-group col-3">
              <label class="font-weight-bold" for="num_exA">Número Exterior: <span class="campoObligatorio">*</span></label>
              <input type="text" class="form-control" id="Numero" maxlength="5" placeholder="Número" name="Numero">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="colA">Colonia:</label>
              <input type="text" class="form-control" id="colA" maxlength="40" placeholder="Nombre de la colonia"
                name="ColoniaAlumno" required>
            </div>
            
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="localA">Localidad: <span class="campoObligatorio">*</span></label>
              <?php
                    require_once("../model/Localities.php");
                    $locality = New Localities();
                    $matrizLocalities=$locality->getLocality();
                ?>
                
                <!--//Inicio del select ////////////////////////////-->
                <select id="datoF" class="form-control" name="LocalidadAlumno" required><span class="campoObligatorio">*</span>
                <option selected>Localidad, Comunidad o Ciudad</option>

                <?php 
                    foreach($matrizLocalities as $item) {
                        echo "<option value=" . $item['IdLocality'] . ">" . $item['Locality'] . "</option>";
                    }                                       
                ?>                
                </select>
                <!--//fin del select ////////////////////////////-->              
            </div>
          </div>
        </div>
      </div>
      <hr>
      </hr>

      <div class="card">
        <div class="card-header">
          <h3>Información Escolar</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="localE">Nivel: <span class="campoObligatorio">*</span></label><br />
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Nivel" id="primaria" value="P">
                <label class="form-check-label" for="primaria">Primaria</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Nivel" id="secundaria" value="S">
                <label class="form-check-label" for="secundaria">Secundaria</label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="localE">Grado de escuela: <span class="campoObligatorio">*</span></label>
              <select id="datoF" class="form-control" name="Grado" >
                <option selected>Selecciona</option>
                <option value="2">2do. de primaria</option>
                <option value="3">3ro. de primaria</option>
                <option value="4">4to. de primaria</option>
                <option value="5">5to. de primaria</option>
                <option value="6">6to. de primaria</option>
                <option value="7">1ro. de Secundaria</option>
                <option value="8">2do. de Secundaria</option>
                <option value="9">3ro. de Secundaria</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="localE">Turno: <span class="campoObligatorio">*</span></label><br />
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Turno" id="Matutino" value="M">
                <label class="form-check-label" for="Matutino">Matutino</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Turno" id="Vespertino" value="V">
                <label class="form-check-label" for="Vespertino">Vespertino</label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="promedio">Promedio: <span class="campoObligatorio">*</span></label>
              <input type="text" class="form-control" id="promedio" placeholder="Promedio actual" name="Promedio"
                maxlength="5" >
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-12">
                <label class="font-weight-bold" for="nombreEsc">Nombre De La Escuela: <span class="campoObligatorio">*</span></label>
                <?php
                    require_once("../model/Schools.php");
                    $school = New Schools();
                    $matrizSchools=$school->getSchool();
                ?>

                <!--//Inicio del select ////////////////////////////-->
                <select id="datoF" class="form-control" name="Escuela" >
                <option selected>Selecciona Tu Escuela</option>

                <?php 
                    foreach($matrizSchools as $item) {
                        echo "<option value=" . $item['IdSchool'] . ">" . $item['School'] . "</option>";
                    }                                       
                ?>
                </select>
                <!--//Fin del select ////////////////////////////-->

            </div>
          </div>

          <div class="row">
            <div class="form-group col-12">
                <label class="font-weight-bold" for="localA">Localidad: <span class="campoObligatorio">*</span></label>
                <?php
                    require_once("../model/Localities.php");
                    $locality = New Localities();
                    $matrizLocalities=$locality->getLocality();
                ?>
                
                <!--//Inicio del select ////////////////////////////-->
                <select id="datoF" class="form-control" name="LocalidadEscuela" >
                <option selected>Lugar donde esta tu escuela</option>

                <?php 
                    foreach($matrizLocalities as $item) {
                        echo "<option value=" . $item['IdLocality'] . ">" . $item['Locality'] . "</option>";
                    }                                       
                ?>                
                </select>
                <!--//fin del select ////////////////////////////-->
            </div>
          </div>
          
        </div>

      </div>
      <hr>
      </hr>
      <div class="card">
        <div class="card-header">
          <h4>Información del Padre, Madre y/o Tutor</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="form-group col-12">
              <label class="font-weight-bold" for="nombreP">Nombre del Padre</label>
              <input type="text" class="form-control" id="nombreP" placeholder="Nombre completo del papá"
                name="NombrePadre" maxlength="80">

            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Ocupación</label>
              <input type="text" class="form-control" id="trabajoP" placeholder="En que trabaja" name="OcupacionPadre"
                maxlength="30">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Lugar Donde Trabaja</label>
              <input type="text" class="form-control" id="trabajoP" placeholder="Nombre de la empresa"
                name="TrabajoPadre" maxlength="40">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label class="font-weight-bold" for="nombreP">Nombre de la Madre <span class="campoObligatorio">*</span></label>
              <input type="text" class="form-control" id="nombreP" placeholder="Nombre completo de la mamá"
                name="NombreMadre" maxlength="80">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Ocupación</label>
              <input type="text" class="form-control" id="trabajoP" placeholder="En que trabaja" name="OcupacionMadre"
                maxlength="80">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Lugar Donde Trabaja</label>
              <input type="text" class="form-control" maxlength="40" id="trabajoP" placeholder="Nombre de la empresa"
                name="TrabajoMadre">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label class="font-weight-bold" for="nombreP">Nombre del Tutor</label>
              <input type="text" class="form-control" maxlength="80" id="nombreP" placeholder="Nombre del Tutor"
                name="Tutor">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Ocupación</label>
              <input type="text" class="form-control" maxlength="40" id="trabajoP" placeholder="En que trabaja"
                name="OcupacionTutor">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Lugar Donde Trabaja</label>
              <input type="text" class="form-control" maxlength="40" id="trabajoP" placeholder="Nombre de la empresa"
                name="TrabajoTutor">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="ingresoP">¿Quien(es) aportan ingreso al Hogar <span class="campoObligatorio">*</span></label>
              <div class="form-check">
                <p>Pudes selecionar Varias Opciones</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="Padre" name="QuienAportaIngreso" value="P">
                  <label class="form-check-label" for="Padre">Padre</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="Madre" name="QuienAportaIngreso" value="M">
                  <label class="form-check-label" for="Madre">Madre</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="Tutor" name="QuienAportaIngreso" value="T">
                  <label class="form-check-label" for="Tutor">Tutor</label>
                </div>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="ingresoP">Ingreso Mensual <span class="campoObligatorio">*</span></label>
              <input type="text" class="form-control" id="ingresoP" placeholder="Ingreso Mensual Total al Hogar"
                name="Ingreso" maxlength="7">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="email">Correo Electrónico</label>
              <input type="email" class="form-control" maxlength="100" id="email" placeholder="Email" name="Email">
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="telA">Teléfono <span class="campoObligatorio">*</span></label>
              <input type="text" class="form-control" maxlength="10" id="telA" placeholder="Número telefónico"
                name="Telefono" >
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="tel2">Teléfono adicional</label>
              <input type="text" class="form-control" maxlength="10" id="tel2" placeholder="Número telefónico"
                name="TelefonoAdicional">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-5">
              <label class="font-weight-bold" for="localE">¿Quién esta proporcinando la Información? <span class="campoObligatorio">*</span></label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="QuienDaInformacion" id="InformacionPadre" value="P">
                <label class="form-check-label" for="InformacionPadre">Padre</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="QuienDaInformacion" id="InformacionMadre" value="M">
                <label class="form-check-label" for="InformacionMadre">Madre</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="QuienDaInformacion" id="InformacionTutor" value="T">
                <label class="form-check-label" for="InformacionTutor">Tutor</label>
              </div>
            </div>
            <div class="form-group col-md-7">
              <label class="font-weight-bold" for="dato">Nombre de quien da la Información <span class="campoObligatorio">*</span></label>
              <input type="text" class="form-control" maxlength="80" id="dato" placeholder="Nombre completo"
                name="NombreQuienDaInformacion" >
            </div>
          </div>
        </div>
      </div>

      <hr>
      </hr>

      <div class="card">
        <div class="card-header">
          <h5>Documentos Requeridos</h5>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label class="font-weight-bold text-uppercase" for="curp">CURP del Estudiante <span class="campoObligatorio">*</span></label>
            <input type="file" name="docCurp" class="form-control-file" id="docCurp">
          </div>

          <div class="form-group">
            <label class="font-weight-bold text-uppercase" for="boleta">
              Boleta o constancia con promedio emitida por el sistema educativo donde compruebe que el alumno está
              inscrito <span class="campoObligatorio">*</span>
            </label>
            <input type="file" name="docScore" class="form-control-file" id="docScore">
          </div>

          <div class="form-group">
            <label class="font-weight-bold text-uppercase" for="domicilio">Comprobante de domicilio (NO mayor a 3 meses
              de antigüedad) <span class="campoObligatorio">*</span></label>
            <input type="file" name="proofAddress" class="form-control-file" id="proofAddress">
          </div>

          <div class="form-group">
            <label class="font-weight-bold text-uppercase" for="domicilio">Identificacion oficial con fotografía vigente (Credencial para Votar o pasaporte)
               <span class="campoObligatorio">*</span></label>
            <input type="file" name="identificationTutor" class="form-control-file" id="identificationTutor">
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
