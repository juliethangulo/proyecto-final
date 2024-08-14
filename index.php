

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
    <link href="slick/slick.css" rel="stylesheet" /> <!-- https://kenwheeler.github.io/slick/ -->
    <link href="slick/slick-theme.css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com -->
	<link href="css/estilos.css" rel="stylesheet" />

  
<!--
Cuerpo pagina PRINCIPAL Eliana´s Spa
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
                              <li class="nav-item active">
                                <a class="nav-link tm-nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="registro.html">Registrarse</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="login.php">Iniciar sesión</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="nosotros.html"> Nosotros </a>
                              </li>
                              <div style="background-color:white; font-size:13px"  >
  
                          </div>  
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->

                          
                        
                        </nav>
                        <!--/.barra-->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg"></div>        
            </div>
        </div>
        
        <!-- PRINCIPAL -->
        <main>
            <!-- LO QUE OFRECEMOS -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-section-header tm-header-floating">Bienvenidos</h2>         
                    </div>
                </div>
            
                <div class="row tm-welcome-row">
                    <article class="col-lg-6 tm-media articlePage" >
                        <img src="img/calendario_.jpg" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="agendar.php" class="tm-article-link"><h3 class="tm-article-title text-uppercase">Agenda Tu cita</h3></a>
                            <p>Con el agendamiento te permitirá escoger el dia y hora en que necesitas ser consentida.</p>
                        </div>
                    </article>
                    <article class="col-lg-6 tm-media">
                        <img src="img/productos 2.jpg" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">Nuestros Productos</h3></a>
                            <p>Te prestamos servicios con los productos de mas alta calidad para cuidar tu belleza.</p>
                        </div>
                    </article>
                    <article class="col-lg-6 tm-media">
                        <img src="img/cabello2.jpg" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="services.html" class="tm-article-link"><h3 class="tm-article-title text-uppercase">Nuestros servicios</h3></a>
                            <p>Brindamos una varidad de servicios para realzar tu belleza y espiritu.</p>
                        </div>
                    </article>
                    <article class="col-lg-6 tm-media">
                        <img src="img/salon 3.jpg" alt="Welcome image" class="img-fluid tm-media-img" />
                        <div class="tm-media-body">
                            <a href="#" class="tm-article-link"><h3 class="tm-article-title text-uppercase">Nuestras instalaciones</h3></a>
                            <p>Contamos con un lugar que te lleva a la mas profund experiencia.</p>
                        </div>
                    </article>
                </div>

            
            <footer>
                Copyright &copy; 2024 Eliana´s Spa. 
            </footer>
            
        </main>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>