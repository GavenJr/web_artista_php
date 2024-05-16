<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <link rel="stylesheet" href="./css/bootstrap.css">

    <script src="./js/bootstrap.js"></script>

    <link rel="stylesheet" href="./css/sign-in.css">

    <link rel="stylesheet" href="styles/style.css">

</head>

  <body>


    <?php include '../header.php';?>

    <div class="writing-section">

      <form action="blog_post_process.php" method="POST" enctype="multipart/form-data">

        <input id="blogTitle" name="blogtitle" type="text" placeholder="Titulo del Blog..." autocomplete="off">
        
        <br>
        
        <span id="dateLabel">Fecha: </span>
        
        <label for="blogDate">HolaMundo...</label>
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

      <center><a style="text-decoration: none;" href="blog.php" id="saveBtn">Volver a la pagina de blogs</a></center>
      
    </div>

    <script src="scripts/script.js"></script>

  </body>
  
</html>