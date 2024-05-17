<?php
require_once "./src/php/router.php";
include "./src/view/global/menu.php";
include "./src/view/global/footer.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">
    <meta name="description" content="This is meta description">
   <meta name="php_ubb" content="Themefisher">

    <title>Proyecto</title>

    <link rel="stylesheet" href="./src/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./src/css/fontawesome/css/all.min.css">

    <script src="./src/js/bootstrap/bootstrap.js"></script>
    <script src="./src/js/switch.js"></script>

    <link rel="stylesheet" href="./src/css/sign-in.css">

   <!-- plugins -->
   <link rel="preload" href="https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2" style="font-display: optional;">
   <link rel="stylesheet" href="./src/css/bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:600%7cOpen&#43;Sans&amp;display=swap" media="screen">

   <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
   <link rel="stylesheet" href="plugins/slick/slick.css">

   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="./src/css/style.css">

   <!--Favicon-->
   <link rel="shortcut icon" href="./src/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="./src/images/favicon.png" type="image/x-icon">

</head>
<body>
<main>
    <?php /*include 'header.php';*/?>
  <?php  echo elMenu(); ?>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $i; ?>" <?php echo ($i === 0 ? "class='active' aria-current='true'" : ""); ?> aria-label="Slide <?php echo $i + 1; ?>"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner">
            <?php
            $carruselItems = array(
                array("title" => "Artista", "subtitle" => "Alista su concierto para las próximas horas.", "buttonText" => "Ver más"),
                array("title" => "Artista", "subtitle" => "Prepara su nuevo disco.", "buttonText" => "Ver más"),
                array("title" => "Artista", "subtitle" => "Lanza nuevo Merch para la gira.", "buttonText" => "Ver más")
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
        <br/>
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

    <?php echo elFooter(); ?>
</body>
</html>
