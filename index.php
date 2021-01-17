<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Banquetes Fabcas</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap CSS-->
    <link href="asset/bootstrap_4.5.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <!-- Font Awesome CSS-->
    <link href="asset/fontawesome_5.15/css/all.min.css" rel="stylesheet" type="text/css" >
    <!-- Owl Carousel 2.3.4 CSS-->
    <link href="asset/owl-carousel-2.3.4/css/owl.carousel.min.css" rel="stylesheet" type="text/css" >
    <!-- CSS ANIMATE-->
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" >
    <!-- CSS CUSTOMIZADO-->
    <link href="css/estilos.css" rel="stylesheet" type="text/css" >
</head>
<body>
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
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="texto-encabezado text-center">
            <div class="container">
                <h1 class="display-4 wow animate__animated animate__bounceIn animate__slow">Servicio de banquetes para fiestas</h1>
                <p class="wow animate__animated animate__bounceInDown animate__delay-.5s" >Ofrecemos el servicio de banquetes según las necesidades y requerimientos de nuestros clientes.</p>
                <a href="contacto.php" class="btn btn-primary btn-lg wow animate__animated animate__zoomInUp animate__slow">Ponte en contacto</a>
            </div>
            
        </div>
        <div class="flecha-bajar text-center">
            <a href="#agencia"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

    <section class="agencia py-2" id="agencia">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-xl-9 wow animate__animated animate__lightSpeedInLeft animate__delay-.5s">
                    <h3 class="text-center text-md-left font-weight-bold">Agencia de servicios para banquetes</h3>
                    <p>FABCAS te asesora en el desarrollo y el diseño para que tu servicio de banquetes salga a la
                        luz. Ponemos a tu disposición las mejores plataformas del mundo de las comunicaciones</p>
                    <p>Ponemos a tu alcance un servicio adaptado a tus necesidades, desde una consultoría integral
                    con supervisión de todos y cada uno de los pasos que has de seguir para crear un negocio actual
                    (comunicación, diseño corporativo, tecnologías...) a productos adaptados a metodologías
                    ágiles de creación de apps deiseñadas por nosotros y avaladas por nuestros años de experiencia.
                    </p>
                </div>
                <div class="col-12 col-md-4 col-xl-3 wow animate__animated animate__lightSpeedInRight animate__delay-.5s">
                    <img src="images/agencia.svg" alt="La agencia">
                </div>
            </div>
        </div>
    </section>

    <section class="tu-mejor-eleccion">
        <div class="container">
            <h2 class="text-center font-weight-bold">¿Porque somos <span>tu mejor elección?</span></h2>
            <p class="text-center">Desarrollo web y Apps para empresas y profesionales</p>
            <div class="row">
                <ul class="col-6 col-lg-4 text-center text-lg-left">
                    <li class="wow animate__animated animate__rotateInDownLeft animate__delay-.7s">
                        <i class="fas fa-briefcase"></i>
                        <div class="contenedor-eleccion">
                            <h4>Aplicaciones para la nube</h4>
                            <p class="d-none d-lg-block">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                    <li class="wow animate__animated animate__zoomIn animate__delay-.8s">
                        <i class="fas fa-bullhorn"></i>
                        <div class="contenedor-eleccion">
                            <h4>Fábrica de Software</h4>
                            <p class="d-none d-lg-block">Servicios de mejora correctiva y evolutiva para sus aplicaciones.</p>
                        </div>
                    </li>
                    <li class="wow animate__animated animate__rotateInUpLeft animate__delay-.9s">
                        <i class="far fa-comment"></i>
                        <div class="contenedor-eleccion">
                            <h4>Gestión en la nube</h4>
                            <p class="d-none d-lg-block">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                </ul>
                <div class="d-none d-lg-block col-lg-4">
                    <img src="images/mundo-mobil.svg" alt="">
                </div>
                <ul class="col-6 col-lg-4 text-center text-lg-right">
                    <li class="wow animate__animated animate__rotateInDownRight animate__delay-.7s">
                        <i class="far fa-calendar-alt"></i>
                        <div class="contenedor-eleccion">
                            <h4>Videojuegos</h4>
                            <p class="d-none d-lg-block">Para empresa que requiera ampliar sus plataformas de gestión.</p>
                        </div>
                    </li>
                    <li class="wow animate__animated animate__zoomIn animate__delay-.8s">
                        <i class="far fa-check-square"></i>
                        <div class="contenedor-eleccion">
                            <h4>Diseño personalizado</h4>
                            <p class="d-none d-lg-block">Customiza hasta el último píxel de tu App. Infinitas Posibilidades.</p>
                        </div>
                    </li>
                    <li class="wow animate__animated animate__rotateInUpRight animate__delay-.9s">
                        <i class="fas fa-cogs"></i>
                        <div class="contenedor-eleccion">
                            <h4>Funciones a medida</h4>
                            <p class="d-none d-lg-block">Tienes más de 50 funciones predesarrolladas para escoger.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
    </section>
    
    <main class="servicios py-2">
        <div class="container">
            <h2 class="text-center font-weight-bold">Nuestros servicios</h2>
            <div class="row">
                <article class="col-md-4 wow animate__animated animate__zoomInLeft animate__delay-.5s">
                    <img src="images/servicio-1.svg" alt="Servicio Desarrollo Aplicaciones Mobiles">
                    <h3><a href="">Desarrollo Aplicaciones Mobiles</a></h3>
                    <p class="d-none d-md-block">Desarrollamos aplicaciones móviles y plataformas web. 
                        Nuestra principal cualidad está en el desarrollo de software a medida de tus necesidades.</p>
                        <a href="#" class="btn btn-secondary d-none d-md-block">Más información</a>
                </article>
                <article class="col-md-4 wow animate__animated animate__zoomInLeft animate__delay-.5s">
                    <img src="images/servicio-2.svg" alt="Consultorí Tecnológica">
                    <h3><a href="">Consultorí Tecnológica</a></h3>
                    <p class="d-none d-md-block">Ofrecemos consultoría tecnológica especializada en movilidad, 
                        necesaria previo al desarrollo de cualquier proyecto.</p>
                        <a href="" class="btn btn-secondary d-none d-md-block">Más información</a>
                </article>
                <article class="col-md-4 wow animate__animated animate__zoomInLeft animate__delay-.5s">
                    <img src="images/servicio-3.svg" alt="Marketing y Publicidad Mobil">
                    <h3><a href="">Marketing y Publicidad Mobil</a></h3>
                    <p class="d-none d-md-block">Desarrollamos campañas publicitarias para tus APP. 
                        Hacemos conocer tu marca en el momento exacto para conseguir un mayor inpacto.</p>
                        <a href="" class="btn btn-secondary d-none d-md-block">Más información</a>
                </article>
            </div>
        </div>
    </main>

    <secction class="ultimos-proyectos py-2">
        <div class="container">
            <h2 class="text-center font-weight-bold">Útimos proyectos</h2>
            <div class="owl-carousel">
                <a href="#">
                    <h4>App Lima Travels</h4>
                    <img src="images/proyecto1.jpg" alt="Proyecto App Lima Travels">
                </a>
                <a href="#">
                    <h4>App Uber</h4>
                    <img src="images/proyecto2.jpg" alt="Proyecto App Uber">
                </a>
                <a href="#">
                    <h4>App Pizza Peru</h4>
                    <img src="images/proyecto3.jpg" alt="Proyecto App Pizza Peru">
                </a>
                <a href="#">
                    <h4>App Muebles Hoy</h4>
                    <img src="images/proyecto4.jpg" alt="Proyecto App Muebles Hoy">
                </a>
                <a href="#">
                    <h4>App Clima Peru</h4>
                    <img src="images/proyecto5.jpg" alt="Proyecto App Clima Peru">
                </a>
                <a href="#">
                    <h4>App Playa</h4>
                    <img src="images/proyecto6.jpg" alt="Proyecto App Playa">
                </a>
            </div>
        </div>
    </secction>

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
    
    <!-- JQuery -->
    <script src="asset/jquery-3.5.1.js"></script>
    <!-- Bootstrap JS -->
    <script src="asset/bootstrap_4.5.3/js/bootstrap.min.js"></script>
    <!-- Owl Carousel 2.3.4 JS-->
    <script src="asset/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <!-- WOW JS-->
    <script src="js/wow.min.js"></script>
    <!-- SMOOTH-SCROLL JS-->
    <script src="js/smooth-scroll.min.js"></script>
    <!-- CUSTOM JS-->
    <script src="js/recursos.js"></script>
</body>
</html>