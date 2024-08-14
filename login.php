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


Cuerpo pagina INICIAR SESION Eliana´s Spa

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
                              <li class="nav-item">
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
                <div class="tm-main-bg tm-IniciarSesión-bg"></div>        
            </div>
        </div>
        
     
        <!-- Principal -->
        <main>
            <!-- Sesion de bienvenida -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Iniciar </h2>         
                    </div>
                </div>

                <div style="
                padding:10px;
                max-width:400px;
                margin-top:10vh; display:flex; flex-direction:column; background-color:white; border-radius:12px">

<?php
session_start();
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  $email = $_SESSION['email'];
  $nombre = $_SESSION['nombre'];
  $direccion = $_SESSION['direccion'];

  echo "<h4>Información del Usuario</h4></br>";
  echo "<p>Usuario: $usuario</p></br>";
  echo "<p>Email: $email</p></br>";
  echo "<p>Nombre: $nombre</p></br>";
  echo "<p>Dirección: $direccion</p></br>";
  echo "<a href='backend/logout.php'>Cerrar sesión</a>";
} else {
  echo "No has iniciado sesión.";
}
?>
</div>
                
               <?php
               
               if (!isset($_SESSION['usuario'])) {?>

               <div class="row tm-welcome-row">
               <div class="col-lg-6 mb-5 tm-contact-box">
                 <div class="tm-contact-form-wrap">
                   <form id="contact-form" action="backend/iniciar_sesion.php" method="post" class="tm-contact-form">
                     <div class="form-group">
                       <input type="text" id="Nombre de usuario" name="usuario" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Nombre de usuario" required="" />
                     </div>
                     <div class="form-group">
                       <input type="text" id="Contrasñea" name="password" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Contraseña" required="" />
                     </div>
                     <div class="form-group">
                   
                       <div class="form-group mb-0">
                         <button type="submit" value="Enviar datos" class="btn rounded-0 d-block ml-auto tm-btn-primary">
                           Iniciar sesión
                         </button>
                       </div>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
               
               
                <?php } ?>
                </section>
              </main>


                         
                  <footer>
                    Copyright &copy; 2024 Eliana´s Spa
                </footer>

                </body>
                </html>

     