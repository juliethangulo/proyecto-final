<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Eliana´s Spa</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com -->
    
	<link href="css/estilos.css" rel="stylesheet" />
<!--

Cuerpo pagina AGENDAR CITA Eliana´s Spa

-->
</head>
<body>
    <!-- Encabezado de página -->
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                      <img src="img/logo.png" class="logo_ing">
                        <h1 class="tm-site-name">Eliana´s Spa</h1>
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        <!--barra-->
                        <nav class="barra barra-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="barra-toggler toggler-example" type="button" data-toggle="collapse" data-target="#barraSupportedContent1"
                            aria-controls="barraSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse barra-collapse tm-nav" id="barraSupportedContent1">
                        
                            <!-- Links -->
                            <ul class="barra-nav mr-auto">
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="registro.html">Registrarse</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="login.php">Iniciar sesión</a>
                              </li>
                              <li class="nav-item active">
                                <a class="nav-link tm-nav-link" href="nosotros.html">Nosotros</a>
                              </li>
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Contenido -->
                        
                        </nav>
                        <!--/.barra-->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-Agendarcita-bg"></div> 
          
                </select>       
            </div>
        </div>
        
        <!-- Principal -->
        <main>
            <!-- Sesion de bienvenida -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Agende su cita</h2>         
                    </div>
                </div>
                <center>
                <div class="row tm-welcome-row">
                  <div class="col-md-3 col-sm-6" style="background: white;
    border-radius: 12px;
    border: 1px solid lightgray;
    margin-left: 20px;
    margin: 10px;">
                        <figure class="tm-servicios-img">
                            <img src="img/manicura1.jpg" alt="Image" class="img-fluid">    
                            <figcaption class="tm-servicios-description">Horarios</figcaption>
                            <center><p
                            style="font-size: 14px;"
                            >Nuestros horarios de atención son de Lunes a Domigos de 09:00 am a 07:00 pm.</p></center>
                        </figure>
                    </div>


                    <?php
if (!isset($_SESSION['usuario'])) {?>
                    <div
                      class="col"
                    style="
                   width: 40vw;
    justify-content: center;
    padding: 10px;
    display: flex;
    margin-top: 10vh;
    background-color: white;
    border-radius: 12px;
    height: 10vh;">
  No has iniciado sesión
</div>
<?php } ?>


<?php 
  if(isset($_SESSION['usuario'])) { ?>
  <div class="col" style="    background: white;
    border-radius: 12px;
    padding: 10px;">

    <div class="m-3">
      <h4>Agendar Cita</h4>
    </div>

<form id="agendar_cita" method="POST">
<div class="mb-3">
 <input class="form-control" type="date" id="fecha" >
</div>

<div class="mb-3">
 <input class="form-control" type="time" id="hora">
</div>
<div class="mb-3">
  <textarea 
    placeholder="Observaciones"
    id="observaciones"
  class="form-control" rows="3"></textarea>
</div>

<div class="mb-3">
<select
id="tipo_servicio" 
class="form-control
form-select form-select-lg mb-3" aria-label="Default select example">
  <option selected>
    Escoga un servicio
  </option>
 <option value="maquillaje">
  Maquillaje
  </option>

  <option value="Cuidado Capilar">
    Cuidado Capilar
  </option>

  <option value="masajes">
    Masajes
  </option>

  <option value="manicure_pedicure">
    Manicure y Pedicure
  </option>

</select>
</div>

<div class="mb-3">
<button type="submit" class="btn buttonGeneral" >
  Agendar Servicio
</button>
</div>
</form>

  </div>
<?php } ?>


    
           </center>
        </main>
        <!-- Footer -->
         
        
  
                
                     
                <footer>
                  Copyright &copy; 2024 Eliana´s Spa
              </footer>

    </div>
    </div>


   

</body>
<script>
    document
      .getElementById("agendar_cita")
      .addEventListener("submit", function (event) {
        event.preventDefault();

        const tipo_servicio = document.getElementById("tipo_servicio").value;
        const fecha = document.getElementById("fecha").value;
        const hora = document.getElementById("hora").value;
        const observaciones = document.getElementById("observaciones").value;

        const formData = new FormData();
        formData.append("tipo_servicio", tipo_servicio);
        formData.append("fecha", fecha);
        formData.append("hora", hora);
        formData.append("observaciones", observaciones);

        fetch("./backend/crear_cita.php", {
          method: "POST",
          body: formData,
        })
          .then((response) => response.text())
          .then((data) => {
            if (data) {
              alert(":::: Cita agendada ::::");
              //limpiar formulario
              document.getElementById("agendar_cita").reset();
            } else {
              alert("Error en el registro: " + data);
            }
          })
          .catch((error) => {
            console.error("Error:", error);
          });
      });
  </script>
</html>
