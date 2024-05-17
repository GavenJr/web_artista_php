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
    <title>Blog</title>

    <script src="./src/js/blog_script.js"></script>

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
    <h2 class="text-center">Ultimos blogs</h2>
    <br>
  </div>

    <div class="all-posts-container">

      <?php

      $servername = "localhost";

      $username = "root";

      $password = "";

      $database = "blog_db";

      $conn = new mysqli($servername, $username, $password, $database);

      if($conn->connect_error) die("Connection Error" . $conn->connect_error);

      $sql = "SELECT `blog`.`id`, `blog`.`titulo`, `blog`.`fecha`, `blog`.`parrafo`, `blog`.`usuario_id`, `blog_images`.`img_name`
      FROM `blog` 
        LEFT JOIN `blog_images` ON `blog_images`.`blog_id` = `blog`.`id`;";

      $result = $conn->query($sql);

      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          echo "<div style='padding: 25px 25px;' class='post-container'>";

          echo "<span id='displayTitle'>" . $row["titulo"] . "</span><br>";

          echo "<span id='displayDate'>" . $row["fecha"] . "</span><br><br>";

          echo "<img style='width: 160px; height: auto' id='displayImage' src='./src/res/img/" . $row["img_name"] . "'><br>";
          // echo "<img style='width: 100%; height: auto' id='displayImage' src='data:image/jpeg;base64,<?php echo base64_encode(" . $row["img_file"] . "); ? >' /> ";

          echo "<p style='overflow: hidden; display: -webkit-box; -webkit-line-clamp: 10; line-clamp: 10; -webkit-box-orient: vertical;' id='displayPara'>" . $row["parrafo"] . "</p><br>";
          
          echo "</div>";
        }
      }
      
      else
      {
        echo "";
      
        // echo "<center><a style='color: dodgerblue;' href='./blog_post.php'>Write a New Post</a></center>";
      }

      $conn->close();
      
      ?>

    </div>

    <?php echo menuNuevoBlog(); ?>

    <?php echo elFooter(); ?>

  </body>
  
</html>