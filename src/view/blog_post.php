<?php
if (realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"])) {
    exit;
}

include "global/menu.php";
include "global/footer.php";
include "global/blog_functions.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear blog</title>

    <link rel="stylesheet" href="./src/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./src/css/fontawesome/css/all.min.css">

    <script src="./src/js/bootstrap/bootstrap.js"></script>
    <script src="./src/js/switch.js"></script>

    <link rel="stylesheet" href="./src/css/sign-in.css">
    <link rel="stylesheet" href="./src/css/blog_style.css">

</head>

  <body>


  <?php  echo elMenu(); ?>
  <br>

    <div class="writing-section">

      <form action="procesar_blog" method="POST" enctype="multipart/form-data">

        <input id="blogTitle" name="blogtitle" type="text" placeholder="Titulo del Blog..." autocomplete="off">
        
        <br>
        
        <span id="dateLabel">Fecha: </span>
        <!-- https://sentry.io/answers/how-do-i-get-the-current-date-and-time-in-php/ -->
        <label for="blogDate"></label>
        <input id="blogDate" name="blogdate" readonly></input>
        
        <br><br>
        
        <label for="file">Imagen:</label>
        <input id="file" type="file" name="uploadimage">
        
        <br><br>
      
        <textarea id="blogPara" name="blogpara" cols="75" rows="10" type="text" placeholder="Contenido del Blog..." autocomplete="off"></textarea>

        <br><br>
        
        <button id="saveBtn" type="submit">Guardar blog</button>

      </form>

      <br>

      <center><a style="text-decoration: none;" href="index" id="saveBtn">Volver a la pagina de blogs</a></center>
      
    </div>

    <script src="./src/js/blog_script.js"></script>

  </body>
  
</html>