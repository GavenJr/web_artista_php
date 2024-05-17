<?php
if (realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"])) {
    exit;
}
include "global/menu.php" ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de un Artista</title>

        <link rel="stylesheet" href="./src/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="./src/css/fontawesome/css/all.min.css">

        <script src="./src/js/bootstrap/bootstrap.js"></script>
        <script src="./src/js/switch.js"></script>

        <link rel="stylesheet" href="./src/css/sign-in.css">

    </head>
    <body>
    <main>
        <?php /*include 'header.php';*/ ?>
        <?php echo elMenu(); ?>


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./src/res/img/artistagenerico.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light ">
                        <h5 style="text-shadow: 0px 0px 6px #000000;">¡Llegó a Santiago!</h5>
                        <p style="text-shadow: 0px 0px 6px #000000;">Nuestro artista llegó a Santiago para su concierto en
                            el Movistar Arena.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./src/res/img/artistagenerico.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light ">
                        <h5 style="text-shadow: 0px 0px 6px #000000;">¡Llegó a Concepción!</h5>
                        <p style="text-shadow: 0px 0px 6px #000000;">Nuestro artista llegó a Santiago para su concierto en
                            el Teatro de la UdeC.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./src/res/img/artistagenerico.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light ">
                        <h5 style="text-shadow: 0px 0px 6px #000000;">¡Llegó a Chillán!</h5>
                        <p style="text-shadow: 0px 0px 6px #000000;">Nuestro artista llegó a Santiago para su concierto en
                            el Teatro Municipal.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img src="./src/res/img/micro.jpg" class="img-fluid" alt="Imagen">
                        <span class="badge text-bg-secondary badge-primary badge-pill position-absolute"
                              style="top: 10px; right: 10px;">Novedades</span>
                    </div>
                    <div class="mt-3">
                        <h5>Novedades</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla risus sit amet nunc
                            accumsan, vel euismod ipsum convallis.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </body>
    </html>
<?php
