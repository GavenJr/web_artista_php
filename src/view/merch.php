<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <!-- Enlace al archivo CSS local -->
    <link rel="stylesheet" href="ruta/a/tu/archivo/styles.css">
    <!-- Enlace a Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Reglas CSS personalizadas */
        .product {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            max-height: 200px;
            margin-bottom: 10px;
        }

        .product p {
            margin: 0;
            font-size: 16px;
            color: #212529;
        }

        .filters {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .filters h2 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 18px;
            color: #212529;
        }
    </style>
</head>
<body>
<main>
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
        <div class="row">
            <?php
            // Array de productos de merchandising
            $productos = array(
                array("Camiseta", "src/img/camiseta.jpg", 20.000, "Ropa"),
                array("Taza", "src/img/taza.jpg", 10.000, "Vajilla"),
                array("Gorra", "src/img/gorra.jpg", 15.000, "Accesorios"),
                array("Llavero", "src/img/llavero.jpg", 5.000, "Accesorios"),
                array("Póster", "src/img/poster.jpg", 8.000, "Decoración"),
                array("Mochila", "src/img/mochila.jpg", 30.000, "Accesorios"),
                array("Parche", "src/img/parche.jpg", 3.000, "Accesorios"),
                array("Sudadera", "src/img/sudadera.jpg", 35.000, "Ropa")
            );

            // Mostrar filtros
            echo '<div class="sidebar">';
            echo '<div class="filters">';
            echo '<h2>Filtrar por:</h2>';
            echo '<select id="categoryFilter">';
            echo '<option value="">Todos</option>';
            $categorias = array_unique(array_column($productos, 3));
            foreach ($categorias as $categoria) {
                echo '<option value="' . $categoria . '">' . $categoria . '</option>';
            }
            echo '</select>';
            echo '</div>';
            echo '</div>';

            // Mostrar productos
            foreach ($productos as $producto) {
                echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">';
                echo '<div class="product" data-category="' . $producto[3] . '">';
                echo '<img src="' . $producto[1] . '" alt="' . $producto[0] . '" class="img-fluid">';
                echo '<p>' . $producto[0] . ' - $' . number_format($producto[2], 3) . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Enlace a Bootstrap bundle desde un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript para filtrar productos por categoría
        document.getElementById('categoryFilter').addEventListener('change', function() {
            var selectedCategory = this.value;
            var products = document.querySelectorAll('.product');

            products.forEach(function(product) {
                var category = product.getAttribute('data-category');
                if (selectedCategory === '' || selectedCategory === category) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
</main>

</body>
</html>
