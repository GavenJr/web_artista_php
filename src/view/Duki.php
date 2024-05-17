<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="src/css/bootstrap.min.css">

<style>
    html {
        overflow-x: hidden;
    }

    .fotoFondo{
        background-size: cover;
        background-position: left bottom; /* Alinea la imagen a la izquierda y abajo */
        height: 500px; /* Altura de la imagen */
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        padding: 0 15px;
        margin-left: -15px;
        margin-right: -15px;
        position: relative; /* Añadido para posicionar el texto correctamente */
    }
    .textoBlanco {
        color: white;
    }
    .botonArtista {
        margin-bottom: 10px;
    }
    .infoArtista {
        position: absolute;
        bottom: 20px; /* Distancia desde la parte inferior */
        left: 20px; /* Distancia desde la parte izquierda */
    }
</style>
</head>

<body>
    <main>
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <h1>LOGO</h1>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                        <li><a href="artistas.php" class="nav-link px-2 text-white">Artistas</a></li>
                        <li><a href="concierto.php" class="nav-link px-2 text-white">Conciertos</a></li>
                        <li><a href="./src/blog.php" class="nav-link px-2 text-white">Blog</a></li>
                        <li><a href="merch.php" class="nav-link px-2 text-white">Merch</a></li>
                    </ul>

                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" class="btn btn-warning">Registrarse</button>
                    </div>
                </div>
            </div>
        </header>

        <div class="fotoFondo" id="artistaDetalle">
            <div class="container infoArtista">
                <h1 class="textoBlanco" id="nombreArtista"></h1>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col">
                            <h4>Nombre real:</h4>
                            <p id="nombreRealArtistaDetalle"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Nacionalidad:</h4>
                            <p id="nacionalidadArtistaDetalle"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Fecha de nacimiento:</h4>
                            <p id="fechaNacimientoArtista"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Biografía:</h4>
                            <p id="biografiaArtista"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Acciones</h4>
                    <button class="btn btn-primary btn-block botonArtista">Acción 1</button>
                    <button class="btn btn-primary btn-block botonArtista">Acción 2</button>
                    <button class="btn btn-primary btn-block botonArtista">Acción 3</button>
                    <button class="btn btn-primary btn-block botonArtista">Acción 4</button>
                </div>
            </div>
        </div>

    </main>

    <!-- Script JavaScript para completar los datos del artista -->
    <script src="src/js/ArtistaSolo.js"></script>
    <script>
        const nombreArtista = "Duki"; // Cambiar por el nombre del artista deseado
        cargarDatosArtista(nombreArtista);
    </script>
</body>

</html>
