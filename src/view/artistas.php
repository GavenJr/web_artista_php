<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="src/css/bootstrap.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
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

        <div class="container">
            <div class="row mb-3">
                <h1 style="text-align: center;"> <br>ARTISTAS</h1>
                <br>
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="filtroGenero" class="form-label"></label>
                        <select class="form-select" id="filtroGenero">
                            <option value="todos">Todos los géneros</option>
                            <option value="Trap">Trap</option>
                            <option value="Pop">Pop</option>
                            <option value="Hip-Hop">Hip Hop</option>
                            <option value="Regueton">Reguetón</option>
                            <option value="Rock">Rock</option>
                        </select>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row" id="artistas" style="justify-content: center;">
                <!-- Aquí se mostrarán las tarjetas de los artistas -->
            </div>
        </div>

    </main>

    <script src="src/Js/Artistas.js"></script>
</body>

</html>
