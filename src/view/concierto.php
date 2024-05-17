<?php
if (realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"])) {
    exit;
}

include "global/menu.php"
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conciertos</title>

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
<?php echo elMenu(); ?>
<main>


    <div class="container mt-4">
        <div class="col-md-4">
            <label for="filter-lives">Filtrar los conciertos</label>
            <input type="text" class="form-control mb-5" id="filter-lives" placeholder="Filtrar">
        </div>

        <div class="concierto mb-5" style="max-width: 800px;margin:0 auto">
            <h2 class="mb-3">Concierto 1</h2>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>03</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Santiago </h4>
                            </div>
                            <div class="col-md">
                                <h4>Movistar Arena</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>07</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Santiago </h4>
                            </div>
                            <div class="col-md">
                                <h4>Estadio Nacional</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>21</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Concepción </h4>
                            </div>
                            <div class="col-md">
                                <h4>Teatro UdeC</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>04</h1><span class="text-secondary">febrero</span>
                            </div>
                            <div class="col-md">
                                <h4>Talcahuano </h4>
                            </div>
                            <div class="col-md">
                                <h4>Espacio Marina</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>01</h1><span class="text-secondary">marzo</span>
                            </div>
                            <div class="col-md">
                                <h4>Chillán </h4>
                            </div>
                            <div class="col-md">
                                <h4>Teatro Municipal</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="concierto mb-5" style="max-width: 800px;margin:0 auto">
            <h2 class="mb-3">Concierto 2: la repetición</h2>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>03</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Santiago </h4>
                            </div>
                            <div class="col-md">
                                <h4>Movistar Arena</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>07</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Santiago </h4>
                            </div>
                            <div class="col-md">
                                <h4>Estadio Nacional</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>21</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Concepción </h4>
                            </div>
                            <div class="col-md">
                                <h4>Teatro UdeC</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>04</h1><span class="text-secondary">febrero</span>
                            </div>
                            <div class="col-md">
                                <h4>Talcahuano </h4>
                            </div>
                            <div class="col-md">
                                <h4>Espacio Marina</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>01</h1><span class="text-secondary">marzo</span>
                            </div>
                            <div class="col-md">
                                <h4>Chillán </h4>
                            </div>
                            <div class="col-md">
                                <h4>Teatro Municipal</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="concierto mb-5" style="max-width: 800px;margin:0 auto">
            <h2 class="mb-3">Concierto 3: la despedida</h2>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>03</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Santiago </h4>
                            </div>
                            <div class="col-md">
                                <h4>Movistar Arena</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>07</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Santiago </h4>
                            </div>
                            <div class="col-md">
                                <h4>Estadio Nacional</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>21</h1><span class="text-secondary">enero</span>
                            </div>
                            <div class="col-md">
                                <h4>Concepción </h4>
                            </div>
                            <div class="col-md">
                                <h4>Teatro UdeC</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>04</h1><span class="text-secondary">febrero</span>
                            </div>
                            <div class="col-md">
                                <h4>Talcahuano </h4>
                            </div>
                            <div class="col-md">
                                <h4>Espacio Marina</h4>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="container text-center align-middle">
                        <div class="row align-items-center">
                            <div class="col-md">
                                <h1>01</h1><span class="text-secondary">marzo</span>
                            </div>
                            <div class="col-md">
                                <h4>Chillán </h4>
                            </div>
                            <div class="col-md">
                                <h4>Teatro Municipal</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var searchBox = document.getElementById("filter-lives");
            searchBox.addEventListener("input", function () {
                var searchText = searchBox.value.toLowerCase();
                var divs = document.getElementsByClassName("concierto");
                for (var i = 0; i < divs.length; i++) {
                    var div = divs[i];
                    var h2 = div.querySelector("h2");
                    if (h2.textContent.toLowerCase().includes(searchText)) {
                        div.style.display = "block";
                    } else {
                        div.style.display = "none";
                    }
                }
            });
        });
    </script>


</main>
</body>
</html>
