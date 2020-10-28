<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejemplo Bootstrap</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/estiloLineaTiempo.css" rel="stylesheet">

</head>

<body>

    <div>
        <header id="header" style="background-color: #1C1C1C;">
            <div class="container">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"> <a href="#hero" style="color: white;font-size: 23px;"><strong>TIEMPO</strong> MAYA</a></li>
                        <li><a href="#">Linea del Tiempo</a></li>
                        <li><a href="#">Calendario Haab</a></li>
                        <li><a href="#">Calendario Cholquij</a></li>
                        <li><a href="#">Rueda Calendarica</a></li>
                        <li><a href="#">Nahuales</a></li>
                        <li><a href="iniciarSesion.php">Iniciar Sesion</a></li>
                        <li><a href="#">Registrarse</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <section>
        <div class="container" style="padding-top: 120px; height:100px">
            <div id="myCarousel" class="carousel" data-ride="carousel">
                <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Entorno del carrusel -->
                <div class="carousel-inner" style="height: 600px;">

                    <div class="item active" style="height: 600px;">
                        <img src="img/fondo4.jpg" alt="Paisaje-01" style="width:100%;">
                        <div class="carousel-caption">
                            <div style="height: 400px; padding-top:50px; background-image: url(https://img.vixdata.io/pd/jpg-large/es/sites/default/files/imj/7-misterios-de-la-cultura-maya-que-despertaran-tu-curiosidad.jpg)">
                            </div>
                            <div id="transparencia">
                                <h1 class='titulo' style="margin-bottom: 10px;"> titulo 1</h1>
                                <p style="margin-bottom: 10px; margin-bottom: 10px;"> Año: 700</p>
                                <button class="btn btn-primary owl-slide-animated owl-slide-cta" style="margin-bottom: 20px; ">
                                    <a class="scrollNavigation" href="#bottom">Leer Mas</a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="height: 600px;">
                        <img src="img/fondo4.jpg" alt="Paisaje-02" style="width:100%;">
                        <div class="carousel-caption">
                            <div style="height: 500px; background-image: url(https://img.vixdata.io/pd/jpg-large/es/sites/default/files/imj/7-misterios-de-la-cultura-maya-que-despertaran-tu-curiosidad.jpg)">
                            </div>
                            <div id="transparencia">
                            <h1 class='titulo' style="margin-bottom: 10px;"> titulo 2</h1>
                                <p style="margin-bottom: 10px; margin-bottom: 10px;"> Año: 800</p>
                                <button class="btn btn-primary owl-slide-animated owl-slide-cta" style="margin-bottom: 20px; ">
                                    <a class="scrollNavigation" href="#bottom">Leer Mas</a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="height: 600px;">
                        <img src="img/fondo4.jpg" alt="Paisaje-03" style="width:100%;">
                        <div class="carousel-caption">
                            <div style="height: 500px; background-image: url(https://img.vixdata.io/pd/jpg-large/es/sites/default/files/imj/7-misterios-de-la-cultura-maya-que-despertaran-tu-curiosidad.jpg)">
                            </div>
                            <div id="transparencia">
                            <h1 class='titulo' style="margin-bottom: 10px;"> titulo 3</h1>
                                <p style="margin-bottom: 10px; margin-bottom: 10px;"> Año: 900</p>
                                <button class="btn btn-primary owl-slide-animated owl-slide-cta" style="margin-bottom: 20px; ">
                                    <a class="scrollNavigation" href="#bottom">Leer Mas</a>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controles izquierda-derecha -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" style="color: black"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" style="color: black"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

    </section>
    <section style="padding-top: 700px;">
        <div class="container">
            <div class="row">
                <div class="col p-5">
                    <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
                    <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.</p>
                    <a class="btn btn-primary owl-slide-cta" href="http://www.blindtextgenerator.com/lorem-ipsum" target="_blank" role="button">Get Dummy Text</a>
                </div>
            </div>
        </div>

    </section>
    <hr id="bottom" class='hiden'>
</body>

</html>