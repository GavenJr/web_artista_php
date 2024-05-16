<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artista</title>
    <link rel="stylesheet" href="src/css/bootstrap.min.css">

    <style>
        body,
        html {
            height: 100%;
            overflow: hidden;

        }

        .container-fluid,
        .row,
        .col {
            height: 100%;

        }

        .text-container {
            background-color: #f8f9fa;
        }

        .image-container {
            background-image: url('src/img/DUki.jpg');
            background-size: cover;
            background-position: center;
        }

        .altura {
            position: fixed;

        }
    </style>
</head>

<body>

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <h1>Artistas</h1>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="artista.php" class="nav-link px-2 text-white">Artista</a></li>
                    <li><a href="concierto.php" class="nav-link px-2 text-white">Conciertos</a></li>
                    <li><a href="blog.php" class="nav-link px-2 text-white">Blog</a></li>
                    <li><a href="merch.php" class="nav-link px-2 text-white">Merch</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>


    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div style="overflow-y:hidden;">
                    <img src="src/img/DUki.jpg">
                </div>
            </div>
        </div>

        <div class="col" style="background-color: #f8f9fa;">
            <div class="container-fluid h-100" style="overflow-y: scroll;">
                <div class="col text-container">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <br>
                                <h2>Nombre Artistico</h2>
                                <p>Nombre Real</p>
                                <br>
                                <p>Fecha de nacimiento: <br>Nacionalidad: </p>
                                <p>Aca va la Biografia</p>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>