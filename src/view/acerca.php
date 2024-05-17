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
    <title>Acerca de</title>

    <link rel="stylesheet" href="./src/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./src/css/fontawesome/css/all.min.css">

    <script src="./src/js/bootstrap/bootstrap.js"></script>
    <script src="./src/js/switch.js"></script>

</head>
<body>
<?php echo elMenu(); ?>
<main>
    <div class="container mt-4">

        <p>Nacido en el año 1889, Artista Genérico emergió como una figura multifacética en el mundo del arte,
            dejando una huella indeleble tanto en la pintura como en la música. Desde temprana edad, demostró un talento
            innato tanto para el arte visual como para la expresión vocal, encantando a quienes lo rodeaban con su
            creatividad y pasión.</p>

        <div class="text-center my-4">
            <img src="./src/res/img/OIG3.jpeg" class="img-fluid" style="width: 300px">
        </div>

        <p>Su carrera artística despegó con fuerza, ganando reconocimiento por su estilo único y su habilidad para
            capturar la esencia de la vida en sus pinturas. Sus obras, caracterizadas por una paleta vibrante y una
            profunda introspección, le valieron el elogio de críticos y aficionados por igual.</p>

        <p>Sin embargo, su creatividad no se limitó a los lienzos, ya que Artista Genérico también incursionó en el
            mundo de la música. Con una voz cautivadora y letras conmovedoras, sus canciones pronto se convirtieron en
            favoritas de multitudes, destacándose entre la escena musical de su época.</p>

        <p>El punto álgido de su carrera musical llegó con el lanzamiento de "Soapping With You", una canción que resonó
            con audiencias de todo el mundo y se convirtió en un himno para una generación. Su capacidad para combinar
            poesía lírica con melodías pegajosas lo catapultó a la fama internacional, consolidándolo como una figura
            icónica en la industria musical.</p>

        <div class="text-center my-4">
            <img src="./src/res/img/OIG4.jpeg" class="img-fluid" style="width: 300px">
        </div>

        <p>Los conciertos de Artista Genérico siempre fueron eventos que agotaban las entradas, con multitudes ansiosas
            por presenciar su talento en vivo. Su carisma en el escenario y su habilidad para conectar con su audiencia
            aseguraban que cada actuación fuera una experiencia inolvidable para todos los presentes.</p>

        <p>En el año 1990, Artista Genérico tuvo el honor de participar en el prestigioso Festival de Viña del Mar,
            donde cautivó al público con su actuación magistral. Su presencia en el festival solo sirvió para
            solidificar su estatus como una leyenda viva del mundo del arte.</p>

        <div class="text-center my-4">
            <img src="./src/res/img/OIG3.lVC9wQ9g0yjKaX.jpeg" class="img-fluid" style="width: 300px">
        </div>

        <p>A lo largo de su vida, Artista Genérico dejó un legado perdurable, tanto en la pintura como en la música,
            inspirando a generaciones futuras a perseguir sus sueños con pasión y determinación. Aunque su tiempo en
            este mundo fue limitado, su influencia perdurará para siempre en el corazón y la mente de quienes lo
            admiraron.</p>

        <div class="text-center my-4">
            <img src="./src/res/img/OIG2..jpeg" class="img-fluid" style="width: 300px">
        </div>


    </div>


</main>
</body>
</html>
