<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Banquetes Fabcas</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap CSS-->
    <link href="asset/bootstrap_4.5.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <!-- Font Awesome CSS-->
    <link href="asset/fontawesome_5.15/css/all.min.css" rel="stylesheet" type="text/css" >
    <!-- CSS ANIMATE-->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" >
    <!-- CSS CUSTOMIZADO-->
    <link href="css/estilos.css" rel="stylesheet" type="text/css" >
</head>
<body class="paginas-internas">
    <section class="bienvenidos">
        <header id="encabezado" class="encabezado navbar fixed-top" role="banner">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="images/logo.svg" alt="Logo del sitio" >
                </a>
                <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
                    <i class="fas fa-search"></i>
                </button>
                <button type="button" class="boton-menu d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                <form action="#" id="bloque-buscar" class="collapse">
                    <div class="contenedor-bloque-buscar">
                        <input type="text" placeholder="Buscar...">
                        <input type="submit" value="Buscar">
                    </div>
                </form>
                <nav id="menu-principal" class="collapse">
                    <ul>
                        <li ><a href="index.php">Inicio</a></li>
                        <li ><a href="nosotros.php">Nosotros</a></li>
                        <li class="active"><a href="servicios.php">Servicios</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="texto-encabezado text-center">
            <div class="container">
                <h1 class="display-4 animate__animated animate__flipInX animate__slow">Servicios</h1>
                <p class="animate__animated animate__flipInX animate__slow">Diseñamos APPs para empresas</p>
            </div>
        </div>
    </section>

    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="index.php">Inicio</a> » Servicios
                </div>
            </div>
        </div>
    </section>

    <main class="py-2 lista-servicios">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fas fa-bullseye" aria-hidden="true"></i>
                        <h4>Desarrollo de Aplicaciones Mobiles</h4>
                        <p>Desarrollamos aplicaciones móviles y plataformas web. Nuestra principal cualidad está en el desarrollo de software a medida de tus necesidades.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio1">Más información</a>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fas fa-bullhorn" aria-hidden="true"></i>
                        <h4>Consultoría Tecnológica</h4>
                        <p>Ofrecemos consultoría tecnológica especializada en movilidad, necesaria previo al desarrollo de cualquier proyecto.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio2">Más información</a>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="item-servicios">
                        <i class="fas fa-paper-plane" aria-hidden="true"></i>
                        <h4>Marketing y publicidad Mobil</h4>
                        <p>Desarrollamos campañas publicitarias para tus APP. Hacemos conocer tu marca en el momento exacto para conseguir un mayor inpacto.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#servicio3">Más información</a>
                    </article>
                </div>

            </div>
        </div>
    </main>

    <footer class="piedepagina py-2" role="contentinfo">
        <div class="container">
            <p>2018 © NETWORK Todos los derechos reservados</p>
            
            <div class="redes-sociales">
                <a href="http://www.facebook.com" class="facebook"><i class="fab fa-facebook"></i><span>Facebook</span></a>
                <a href="http://www.twitter.com" class="twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                <a href="http://www.github.com" class="github"><i class="fab fa-github-alt"></i><span>Github</span></a>
                <a href="http://www.dribble.com" class="dribble"><i class="fab fa-dribbble"></i><span>Dribble</span></a>
                <a href="http://pinterest.com" class="pinterest"><i class="fab fa-pinterest"></i><span>Pinterest</span></a>
            </div>
        </div>
    </footer>

    <a data-scroll href="#encabezado" class="ir-arriba"><i class="fas fa-chevron-circle-up"></i></a>

    <!-- Modal 1 -->
    <div class="modal fade" id="servicio1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desarrollo de Aplicaciones Mobiles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                        </div>
                        <div class="col-md-4">
                            <img src="images/servicio-1.svg" alt="Servicio1" width="200" class="d-block img-fluid mx-auto">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="servicio2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Consultoría Tecnológica</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                        </div>
                        <div class="col-md-4">
                            <img src="images/servicio-2.svg" alt="Servicio2" width="200" class="d-block img-fluid mx-auto">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="servicio3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Marketing y publicidad Mobil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis non error, reprehenderit iusto illo quo? Molestiae, sed blanditiis officiis qui corporis odit dignissimos numquam, nulla quo commodi, alias in maxime.
                        </div>
                        <div class="col-md-4">
                            <img src="images/servicio-3.svg" alt="Servicio3" width="200" class="d-block img-fluid mx-auto">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- JQuery -->
    <script src="asset/jquery-3.5.1.js"></script>
    <!-- Bootstrap JS -->
    <script src="asset/bootstrap_4.5.3/js/bootstrap.min.js"></script>
    <!-- CUSTOM JS-->
    <script src="js/wow.min.js"></script>
    <!-- SMOOTH-SCROLL JS-->
    <script src="js/smooth-scroll.min.js"></script>
    <!-- CUSTOM JS-->
    <script src="js/recursos.js"></script>
    
</body>
</html>