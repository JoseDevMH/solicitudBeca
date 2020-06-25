<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="keywords"
    content="Juntos Seguimos Creciendo, Juventino Rosas, Serafin Prieto Alvarez, Presidencia Municipal, Gobierno Santa Cruz, Becas" />
  <meta name="description" content="Gobierno Municipal de Santa Cruz de Juventino Rosas, Juntos Hacemos el Cambio" />
  <meta name="author" content="Presidencia Municipal de Sta Cruz de Juventino Rosas" />
  <meta property="og:title" content="Presidencia Municipal de Sta Cruz de Juventino Rosas" />
  <meta property="og:url" content="www.juventinorosas.gob.mx/" />
  <meta property="og:site_name" content="Presidencia Municipal de Santa Cruz de Juventino Rosas" />
  <meta property="og:type" content="blog" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Solicitudes de Paquetes de Utiles Escolares</title>
</head>

<body>
  <!--Header ////////////////////////////////////////////////////////////-->
  <div class="row header">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F3C923;">
        <a class="navbar-brand" href="https://juventinorosas.gob.mx" target="_self">
          <img src="images/logo.png" width="80" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!--fin Header ////////////////////////////////////////////////////////////-->

  <!--Contenido de la pagina ///////////////////////////////////////////////-->
  <div class="container mt-3 mb-3">
    <h1>Coordinación de Educación Municipal</h1>
    <h2>Solitud de Paquetes Escolares</h2>
    <p>Estos paquetes son para Niviles de Primaria y Secundaria</p>
    <form class="form" method="POST" action="insertAplication.php">
      <div class="card">
        <div class="card-header">
          <h3>Información del Alumno</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 ">
              <div class="form-group">
                <label class="font-weight-bold" for="nombrerA">Nombre:</label>
                <input type="text" class="form-control" placeholder="Nombre(s)" id="nombrerA" name="nombreAlumno"
                  maxlength="50" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="font-weight-bold" for="priApellido">Primer Apellido:</label>
                <input type="text" class="form-control" placeholder="Primer Apellido" id="priApellido"
                  name="primerApellidoAlumno" maxlength="50" required>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="font-weight-bold" for="segApellido">Segundo Apellido:</label>
                <input type="text" class="form-control" placeholder="Segundo Apellido" id="segApellido"
                  name="segundoApellidoAlumno" maxlength="50" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="font-weight-bold" for="edadA">Edad:</label>
                <input type="text" class="form-control" id="edadA" placeholder="Cuantos años tienes" name="EdadAlumno"
                  maxlength="2" required>
              </div>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <label class="font-weight-bold" for="curp">CURP:</label>
                <input type="text" class="form-control" maxlength="18" id="curp" placeholder="CURP" name="CurpAlumno"
                  required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-9">
              <label class="font-weight-bold" for="domicilioA">Domicilio:</label>
              <input type="text" class="form-control" maxlength="40" id="domicilioA" placeholder="Calle" name="Calle"
                required>
            </div>
            <div class="form-group col-3">
              <label class="font-weight-bold" for="num_exA">Número Exterior:</label>
              <input type="text" class="form-control" id="num_exA" maxlength="5" placeholder="Número" name="Numero">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="colA">Colonia:</label>
              <input type="text" class="form-control" id="colA" maxlength="40" placeholder="Nombre de la colonia"
                name="ColoniaAlumno" required>
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="localA">Localidad:</label>
              <?php
                    require_once("Localities.php");
                    $locality = New Localities();
                    $matrizLocalities=$locality->getLocality();
                ?>
                
                <!--//Inicio del select ////////////////////////////-->
                <select id="datoF" class="form-control" name="LocalidadAlumno" required>
                <option selected>Localidad, Comunidad o Ciudad</option>

                <?php 
                    foreach($matrizLocalities as $item) {
                        echo "<option value=" . $item['IdLocality'] . ">" . $item['Locality'] . "</option>";
                    }                                       
                ?>                
                </select>
                <!--//fin del select ////////////////////////////-->
              </select>
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
              <label class="font-weight-bold" for="localE">Nivel:</label><br />
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
              <label class="font-weight-bold" for="localE">Grado de escuela:</label>
              <select id="datoF" class="form-control" name="GradoEscolar" required>
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
              <label class="font-weight-bold" for="localE">Turno:</label><br />
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
              <label class="font-weight-bold" for="promedio">Promedio:</label>
              <input type="text" class="form-control" id="promedio" placeholder="Promedio actual" name="PromedioAlumno"
                maxlength="5" required>
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-12">
                <label class="font-weight-bold" for="nombreEsc">Nombre De La Escuela:</label>
                <?php
                    require_once("Schools.php");
                    $school = New Schools();
                    $matrizSchools=$school->getSchool();
                ?>

                <!--//Inicio del select ////////////////////////////-->
                <select id="datoF" class="form-control" name="Escuela" required>
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
                <label class="font-weight-bold" for="localA">Localidad:</label>
                <?php
                    require_once("Localities.php");
                    $locality = New Localities();
                    $matrizLocalities=$locality->getLocality();
                ?>
                
                <!--//Inicio del select ////////////////////////////-->
                <select id="datoF" class="form-control" name="Localidad" required>
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
              <label class="font-weight-bold" for="nombreP">Nombre del Padre:</label>
              <input type="text" class="form-control" id="nombreP" placeholder="Nombre completo del papá"
                name="NombreDelPadre" maxlength="80">

            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Ocupación:</label>
              <input type="text" class="form-control" id="trabajoP" placeholder="En que trabaja" name="ocupacionPadre"
                maxlength="30">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Lugar Donde Trabaja:</label>
              <input type="text" class="form-control" id="trabajoP" placeholder="Nombre de la empresa"
                name="TrabajoDelPadre" maxlength="40">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label class="font-weight-bold" for="nombreP">Nombre de la Madre:</label>
              <input type="text" class="form-control" id="nombreP" placeholder="Nombre completo de la mamá"
                name="NombreDelaMadre" maxlength="80">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Ocupación:</label>
              <input type="text" class="form-control" id="trabajoP" placeholder="En que trabaja" name="ocupacionMadre"
                maxlength="80">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Lugar Donde Trabaja:</label>
              <input type="text" class="form-control" maxlength="40" id="trabajoP" placeholder="Nombre de la empresa"
                name="TrabajoDelaMadre">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label class="font-weight-bold" for="nombreP">Nombre del Tutor:</label>
              <input type="text" class="form-control" maxlength="80" id="nombreP" placeholder="Nombre del Tutor"
                name="Tutor">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Ocupación:</label>
              <input type="text" class="form-control" maxlength="40" id="trabajoP" placeholder="En que trabaja"
                name="ocupacionTutor">
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="trabajoP">Lugar Donde Trabaja:</label>
              <input type="text" class="form-control" maxlength="40" id="trabajoP" placeholder="Nombre de la empresa"
                name="TrabajoDelTutor">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="ingresoP">¿Quien(es) aportan ingreso al Hogar</label>
              <div class="form-check">
                <p>Pudes selecionar Varias Opciones</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="Padre" name="Padres" value="P">
                  <label class="form-check-label" for="Padre">Padre</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="Madre" name="Padres" value="M">
                  <label class="form-check-label" for="Madre">Madre</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="Tutor" name="Padres" value="T">
                  <label class="form-check-label" for="Tutor">Tutor</label>
                </div>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="ingresoP">Ingreso Mensual</label>
              <input type="text" class="form-control" id="ingresoP" placeholder="Ingreso Mensual Total al Hogar"
                name="Ingresos" maxlength="7">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="font-weight-bold" for="email">Correo Electrónico:</label>
              <input type="email" class="form-control" maxlength="100" id="email" placeholder="Email" name="Email">
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="telA">Teléfono</label>
              <input type="text" class="form-control" maxlength="10" id="telA" placeholder="Número telefónico"
                name="Telefono" required>
            </div>
            <div class="form-group col-md-3">
              <label class="font-weight-bold" for="tel2">Teléfono adicional</label>
              <input type="text" class="form-control" maxlength="10" id="tel2" placeholder="Número telefónico"
                name="TelefonoAdicional">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-5">
              <label class="font-weight-bold" for="localE">¿Quién esta proporcinando la Información?:</label>
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
              <label class="font-weight-bold" for="dato">Nombre de quien da la Información:</label>
              <input type="text" class="form-control" maxlength="80" id="dato" placeholder="Nombre completo"
                name="Informacion" required>
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
            <label class="font-weight-bold text-uppercase" for="curp">CURP del Estudiante:</label>
            <input type="file" class="form-control-file" id="curp" required>
          </div>

          <div class="form-group">
            <label class="font-weight-bold text-uppercase" for="domicilio">Comprobante de domicilio (NO mayor a 3 meses
              de antigüedad)</label>
            <input type="file" class="form-control-file" id="domicilio" required>
          </div>

          <div class="form-group">
            <label class="font-weight-bold text-uppercase" for="boleta">
              Boleta o constancia con promedio emitida por el sistema educativo donde compruebe que el alumno está
              inscrito
            </label>
            <input type="file" class="form-control-file" id="boleta" required>
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


  <!-- Footer /////////////////////////////////////////////// -->
  <div class="row footer">
    <div class="col-12">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-3 text-left margen">
            <h5>Transparencia</h5>
            <ul>
              <li><a href="descentralizados/dif/informacion-publica.php" class="telefono">DIF</a></li>
              <li><a href="descentralizados/comude/informacion-publica.php" class="telefono">COMUDE</a>
              </li>
              <li><a href="descentralizados/cmapaj/informacion-publica.php" class="telefono">CMAPAJ</a>
              </li>
              <li><a href="descentralizados/imuvi/informacion-publica.php" class="telefono">IMUVI</a>
              </li>
              <li><a href="descentralizados/cultura/informacion-publica.php" class="telefono">Casa de
                  la Cultura</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-3 text-left margen">
            <h5>Más Visto</h5>
            <ul>
              <li><a href="transparencia/fraccion1.php" class="telefono">Leyes y Reglamentos</a></li>
              <li><a href="transparencia/fraccion20.php" class="telefono">Trámites</a></li>
              <li><a href="transparencia/index.php" class="telefono">Transparencia</a></li>
              <li><a href="#" class="telefono">Turismo</a></li>
              <li><a href="directorio/telefonos.php" class="telefono">Directorio Telefónico</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-6 margen">
            Presidencia Municipal de Santa Cruz de Juventino Rosas, Guanajuato. <br>
            <span class="negrita"><span class="icon-location-pin"></span> Dirección:</span> Hidalgo 106,
            Zona Centro, Juventino Rosas, Gto. <br />
            <span class="negrita"><span class="icon-hour-glass"></span> Horario: </span> Lunes a Viernes
            en horario 8:30 a.m. - 4:30 p.m. <br />
            <span class="negrita"><span class="icon-phone"></span> Teléfono: </span> <a href="tel:+524121578040"
              class="telefono">(412) 157 80 40</a> <br>
            <span class="negrita"><span class="icon-box"></span> Código Postal: </span> 38240
            <p class="footDR">© 2016 Todos los Derechos Reservados</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-lg-12  text-center">
          <ul>
            <li><a href="mapa.php" class="telefono">Mapa del Sitio</a></li>
            <li><a href="transparencia/archivos/avisoPrivacidadIntegral.pdf" class="telefono" target="_blank"> Aviso de
                Privacidad</a></li>
          </ul>
        </div>
      </div>


    </div>
  </div>
  <!--fin Footer Content ///////////////////////////////////// -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('#myModal').modal('show')
    });
  </script>
  <!--<script src="js/jquery.js"></script>    
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>-->
</body>

</html>