<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <link rel="stylesheet" href="./src/css/bootstrap.css">

    <script src="./src/js/bootstrap.js"></script>

    <link rel="stylesheet" href="./src/css/sign-in.css">

</head>
<body>
<main>
    <?php /*include 'header.php';*/?>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h1>LOGO</h1>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="./src/view/artistas.php" class="nav-link px-2 text-white">Artistas</a></li>
                    <li><a href="./src/view/concierto.php" class="nav-link px-2 text-white">Conciertos</a></li>
                    <li><a href="./src/view/blog.php" class="nav-link px-2 text-white">Blog</a></li>
                    <li><a href="./src/view/merch.php" class="nav-link px-2 text-white">Merch</a></li>

                </ul>

                <div class="text-end">
                    <!-- Boton modal Login -->
                    <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">
                        Login
                    </button>

                    <!-- Modal Login -->
                    <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabelLogin">Iniciar Sesion</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-signin w-100 m-auto">
                                        <form>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Email</p>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInputLogin" placeholder="name@example.com">
                                                <label for="floatingInputLogin">Email@dominio.com</label>
                                            </div>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Contraseña</p>
                                            </div>
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPasswordLogin" placeholder="Password">
                                                <label for="floatingPasswordLogin">Contraseña</label>
                                            </div>

                                            <div class="form-check text-start my-3">
                                                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefaultLogin">
                                                <label class="form-check-label" for="flexCheckDefaultLogin">
                                                    Recordarme
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Iniciar sesion</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Boton modal Register -->
                    <button type="button" class="btn  btn-warning me-2" data-bs-toggle="modal" data-bs-target="#staticBackdropRegister">
                        Registrarse
                    </button>

                    <!-- Modal Register -->
                    <div class="modal fade" id="staticBackdropRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabelRegister">Registrarse</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-signin w-100 m-auto">
                                        <form>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Email</p>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInputRegister" placeholder="name@example.com">
                                                <label for="floatingInputRegister">Email@dominio.com</label>
                                            </div>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Contraseña</p>
                                            </div>
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPasswordRegister" placeholder="Password">
                                                <label for="floatingPasswordRegister">Contraseña</label>
                                            </div>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Repita su contraseña</p>
                                            </div>
                                            <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPasswordCheck" placeholder="Password">
                                            </div>

                                            <div class="form-check text-start my-3">
                                                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefaultRegister">
                                                <label class="form-check-label" for="flexCheckDefaultRegister">
                                                    Acepto los terminos y condiciones
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Registrarse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
                    <!-- <button type="button" class="btn btn-warning">Registrarse</button> -->
                </div>
            </div>
        </div>
    </header>




    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $i; ?>" <?php echo ($i === 0 ? "class='active' aria-current='true'" : ""); ?> aria-label="Slide <?php echo $i + 1; ?>"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner">
            <?php
            $carruselItems = array(
                array("title" => "Ñublense", "subtitle" => "Alista su concierto para las próximas horas.", "buttonText" => "Ver más"),
                array("title" => "Ñublense", "subtitle" => "Prepara su nuevo disco.", "buttonText" => "Ver más"),
                array("title" => "Ñublense", "subtitle" => "Lanza nuevo Merch para la gira.", "buttonText" => "Ver más")
            );

            foreach ($carruselItems as $index => $item) {
                ?>
                <div class="carousel-item <?php echo ($index === 0 ? "active" : ""); ?>">
                    <img class="bd-placeholder-img" src="src/img/artista.png" height="100%" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <div class="container">
                        <div class="carousel-caption <?php echo ($index === 2 ? "text-end" : "text-start"); ?>">
                            <h1><?php echo $item['title']; ?></h1>
                            <p class="opacity-75"><?php echo $item['subtitle']; ?></p>
                            <p><a class="btn btn-lg btn-primary" href="#"><?php echo $item['buttonText']; ?></a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Volver</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Avanzar</span>
        </button>
    </div>
    <div>
        <br></br>
    </div>
    <div class="row align-items-center justify-content-center">
        <?php
        $noticias = array(
            array("title" => "Noticia 1", "content" => "Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1"),
            array("title" => "Noticia 2", "content" => "Contenido de la Noticia 2Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1Contenido de la Noticia 1"),
        );

        foreach ($noticias as $index => $noticia) {
            ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $noticia['title']; ?></h5>
                        <p class="card-text"><?php echo $noticia['content']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div>
            <br></br>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('myCarousel').carousel({
                interval: 4000
            });
        });
    </script>

</main>
</body>
</html>
