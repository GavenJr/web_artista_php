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
    <title>Merch</title>
    <!-- Enlace al archivo CSS local -->
    <link rel="stylesheet" href="./src/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./src/css/fontawesome/css/all.min.css">

    <script src="./src/js/bootstrap/bootstrap.js"></script>
    <script src="./src/js/switch.js"></script>
    <!-- Enlace a Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Reglas CSS personalizadas */
        .product {
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
        }

        .filters {
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .filters h2 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<main>
    <?php echo elMenu(); ?>

    <div class="container mt-4">
        <div class="row">
            <?php
            // Array de productos de merchandising
            $productos = array(
                array("Camiseta", "./src/res/img/camiseta.jpg", 20.000, "Ropa"),
                array("Taza", "./src/res/img/taza.jpg", 10.000, "Vajilla"),
                array("Gorra", "./src/res/img/gorra.jpg", 15.000, "Accesorios"),
                array("Llavero", "./src/res/img/llavero.jpg", 5.000, "Accesorios"),
                array("Póster", "./src/res/img/poster.jpg", 8.000, "Decoración"),
                array("Mochila", "./src/res/img/mochila.jpg", 30.000, "Accesorios"),
                array("Parche", "./src/res/img/parche.jpg", 3.000, "Accesorios"),
                array("Sudadera", "./src/res/img/sudadera.jpg", 35.000, "Ropa")
            );

            // Mostrar filtros
            echo '<div class="sidebar">';
            echo '<div class="filters bg-body-tertiary border-light-subtle border rounded">';
            echo '<h2>Filtrar por:</h2>';
            echo '<select id="categoryFilter" class="form-select" >';
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
                echo '<div class="product bg-body-tertiary border-light-subtle border rounded" data-category="' . $producto[3] . '">';
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
                    product.parentNode.style.display = 'block';
                } else {
                    product.parentNode.style.display = 'none';
                }
            });
        });
    </script>
</main>

</body>
</html>
