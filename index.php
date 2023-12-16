<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Yanho" />
    <meta name="description" content="Sitio Mi Ciudadanía Europea">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Mi Ciudadanía Europea</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Cabecera -->
        <?php require_once 'templates/header.php';?>

        <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
           
            <!-- Slide 2 -->
            <div class="slide" data-bg-video="video/greenCard_v3_opt.mp4">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <!-- <h2 data-caption-animate="zoom-out">El mejor proceder a su servicio</h2> -->
                        <!-- <img class="img-fluid" src="./images/logo_pasaporte_4_opt.png" alt=""> -->
                        <br>
                        <img class="img-fluid" src="./images/ciudadania3.png" alt="">
                        <p>LO QUE MÁS NOS INTERESA ES TU HISTORIA</p>
                        <div><a href="./contacto.php" class="btn btn-contactanos scroll-to">Contactanos</a></div>
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
            <!-- end: Slide 2 -->
        </div>
        <!--end: Inspiro Slider -->
        <!-- WELCOME -->
        <section id="welcome" class="background-pink">
            <div class="container">
                <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                    <img class="img-fluid" src="./images/logo.svg" width="200" height="40" alt="">
                    <h2 class="text-white">CONTÁNOS TU HISTORIA, DE LOS PAPELES NOS ENCARGAMOS NOSOTROS
                    </h2>
                    <span class="lead">Somos una Gestoría de ciudadanías que nació hace más de 5 años, motivados por nuestra pasión por descubrir culturas nuevas y viajar. Hoy somos un equipo de más de 10 personas que trabajamos todos los días con ganas y profesionalismo para cumplir el sueño de muchas personas que desean gestionar su ciudadanía europea.  
                    </span>

                </div>
               
                
            </div>
        </section>
        <!-- end: WELCOME -->
       
        <!-- COUNTERS -->
        <section class="text-light p-t-150 p-b-150 " data-bg-parallax="images/parallax/fam_002_opt.jpg">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-address-card"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="2300" data-from="12" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>CIUDADANIAS REALIZADAS</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                            <div class="counter"> <span data-speed="1000" data-refresh-interval="100" data-to="1365" data-from="350" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>TAZAS DE CAFÉ EMPLEADAS</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-solid fa-child"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="497" data-from="3" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>FAMILIAS SATISFECHAS</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-solid fa-plane"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="825" data-from="50" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>VIAJES HECHOS</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- end: COUNTERS -->
        
        <!-- PORTFOLIO -->
        <section class="p-b-20">
            <div class="container">
                <div class="heading-text heading-section text-center p-b-40" data-animate="fadeInUp">
                    <!-- <h2>Nuestra Familia</h2>
                    <span class="lead">Lorem ipsum dolor sit amet, coper suscipit lobortis nisl ut aliquip ex ea commodo
                        consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                        consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</span> -->
                        <img class="img-fluid" src="./images/europa3_opt.png" alt="">
                        
                </div>
               
            </div>
            <div class="portfolio">
                <!-- Portfolio Items -->
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
                    <!-- portfolio item -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="https://www.instagram.com/miciudadaniaeuropea/"><img src="images/portfolio/gal_001.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/miciudadaniaeuropea/"><img src="images/portfolio/gal_002.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="https://www.instagram.com/miciudadaniaeuropea/"><img src="images/portfolio/inst_001_opt.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="images/portfolio/inst_001_opt.jpg"><i class="icon-maximize"></i></a>
                                <a href="https://www.instagram.com/miciudadaniaeuropea/"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/ins_002_opt.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="images/portfolio/ins_002_opt.jpg"><i class="icon-maximize"></i></a>
                                <a href="https://www.instagram.com/miciudadaniaeuropea/"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/ins_003_opt.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="images/portfolio/ins_003_opt.jpg"><i class="icon-maximize"></i></a>
                                <a href="https://www.instagram.com/miciudadaniaeuropea/"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/ins_004_opt.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="images/portfolio/ins_004_opt.jpg"><i class="icon-maximize"></i></a>
                                <a href="https://www.instagram.com/miciudadaniaeuropea/"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-photography ct-marketing ct-media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="images/portfolio/ins_005_opt.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a title="Paper Pouch!" data-lightbox="image" href="images/portfolio/ins_005_opt.jpg"><i class="icon-maximize"></i></a>
                                <a href="https://www.instagram.com/miciudadaniaeuropea/"><i class="icon-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item no-overlay ct-photography ct-media ct-branding ct-Media ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-slider">
                                <div class="carousel dots-inside dots-dark arrows-dark" data-items="1" data-loop="true" data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="1500">
                                    <a href="https://www.instagram.com/miciudadaniaeuropea/"><img src="images/portfolio/gal_003.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/miciudadaniaeuropea/"><img src="images/portfolio/gal_004.jpg" alt=""></a>
                                    <a href="https://www.instagram.com/miciudadaniaeuropea/"><img src="images/portfolio/gal_005.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item img-zoom ct-marketing ct-media ct-branding ct-marketing ct-webdesign">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="https://www.instagram.com/miciudadaniaeuropea/"><img src="images/portfolio/gal_006.jpg" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="https://www.instagram.com/miciudadaniaeuropea/">
                                    <h3>Mi Ciudadanía</h3>
                                    <span>Lo que más nos interesa es tu historia</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                </div>
                <!-- end: Portfolio Items -->
            </div>
        </section>
        <!-- end: PORTFOLIO -->
        <!-- BLOG -->
        <section class="content background-grey-50">
            <div class="container">
                <div class="heading-text heading-section">
                    <!-- <h2>OUR BLOG</h2>
                    <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
                        orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
                        molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
                        orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span> -->
                </div>
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="./mce_quienes.php">
                                    <img alt="" src="images/gallery/im_1002_med.jpg">
                                </a>
                                <!-- <span class="post-meta-category"><a href="">Lifestyle</a></span> -->
                            </div>
                            <div class="post-item-description">
                                
                                <h2><a href="./mce_quienes.php">¿QUIÉNES SOMOS?
                                    </a></h2>
                                <!-- <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p> -->
                                <!-- <a href="#" class="item-link">Ver Más <i class="icon-chevron-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="./mce_quienes.php#section2">
                                    <img alt="" src="images/gallery/im_1001_med.jpg">
                                </a>
                                <!-- <span class="post-meta-category"><a href="">Science</a></span> -->
                            </div>
                            <div class="post-item-description">
                                
                                <h2><a href="./mce_quienes.php#section2">¿QUÉ HACEMOS?
                                    </a></h2>
                                <!-- <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p> -->
                                <!-- <a href="#" class="item-link">Ver más <i class="icon-chevron-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/gallery/im_1003_med.jpg">
                                </a>
                                <!-- <span class="post-meta-category"><a href="">Science</a></span> -->
                            </div>
                            <div class="post-item-description">
                                
                                <h2><a href="#">PROCESO
                                    </a></h2>
                                <!-- <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p> -->
                                <!-- <a href="#" class="item-link">Ver Más <i class="icon-chevron-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                </div>


                <div class="heading-text heading-section text-center text-black-50">
                    <h2>QUÉ INCLUYE NUESTRO SERVICIO </h2>
                    <!-- <span class="lead">The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus,
                        orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id
                        molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare
                        orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor. </span> -->
                </div>
                <div class="heading-text heading-section text-center m-b-40" data-animate="fadeInUp">
                   
                    <h5 class="lead">
                        <ul class="list-icon list-icon-colored">
                            <li><i class="fa fa-3x fa-paper-plane"></i>BÚSQUEDA Y SOLICITUD DE DOCUMENTACIÓN</li>
                            <li><i class="fa fa-paper-plane"></i>TRADUCCIONES EN CASO DE QUE SE REQUIERAN </li>
                            <li><i class="fa fa-paper-plane"></i>LEGALIZACIÓN Y APOSTILLADO DE LA HAYA EN TODOS LOS DOCUMENTOS QUE LO REQUIERAN </li>
                            <li><i class="fa fa-paper-plane"></i>FORMULARIOS COMPLETOS CORRESPONDIENTES </li>
                            <li><i class="fa fa-paper-plane"></i>ASESORAMIENTO INTEGRAL DURANTE EL PROCESO DE OBTENCIÓN DE LAS CIUDADANÍAS Y PASAPORTES</li>
                        </ul>
                    </h5>
                    
                    <!-- <span class="lead">Soy Camila, Diseñadora y creadora de este hermoso proyecto . La vida me llevó por este camino hace 3 años, y descubrí lo que verdaderamente amo hacer con dedicación y pasión. 
                    </span> -->

                </div>



                <div id="blog" class="grid-layout post-2-columns m-b-30" data-item="post-item">
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/gallery/im_1005_med.jpg">
                                </a>
                                <!-- <span class="post-meta-category"><a href="">Lifestyle</a></span> -->
                            </div>
                            <div class="post-item-description">
                                
                                <h2><a href="#">NUESTRO VALOR AGREGADO
                                    </a></h2>
                                <!-- <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p> -->
                                <!-- <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/gallery/im_1004_med.jpg">
                                </a>
                                <!-- <span class="post-meta-category"><a href="">Science</a></span> -->
                            </div>
                            <div class="post-item-description">
                                
                                <h2><a href="#">INVESTIGACIÓN GENEALÓGICA
                                    </a></h2>
                                <!-- <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p> -->
                                <!-- <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->

                </div>
            </div>
        </section>
        <!-- end: BLOG -->
        
        <div class="call-to-action background-image p-t-100 p-b-100" style="background-image:url(images/parallax/im_1007_gde.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" data-animate="fadeInUp">
                        <h3 class="text-light">¿ POR QUÉ ELEGIRNOS ?</h3>
                        <!-- <p class="text-light">This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured content.</p> -->
                        <h5 class="lead">
                        <ul class="list-icon list-icon-colored text-light">
                            <li><i class="fa fa-3x fa-paper-plane"></i>COSTOS ACCESIBLES</li>
                            <li><i class="fa fa-paper-plane"></i>INNOVADORES</li>
                            <li><i class="fa fa-paper-plane"></i>ATENCIÓN PERSONALIZADA</li>
                            
                            <a class="btn btn-contactanos" href="./contacto.php">Contactanos!</a>
                        </ul>
                    </h5>
                    </div>
                   
                </div>
            </div>
        </div>
        
       
        
        <!-- Footer -->
        <?php require_once 'templates/footer.php';?>
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>

</html>