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

    <link rel="stylesheet" href="./src/css/sign-in.css">
    <link rel="stylesheet" href="./src/css/blog_style.css">

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


  <?php  echo elMenu(); ?>
  <br>
  <div>
    <br>
    <h2 class="text-center">Crear un nuevo blog</h2>
    <br>
  </div>

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

    <?php echo elFooter(); ?>

  </body>
  
</html>