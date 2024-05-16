<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">

    <script src="../js/bootstrap/bootstrap.js"></script>

    <link rel="stylesheet" href="../css/sign-in.css">

    <link rel="stylesheet" href="../css/blog_style.css">

</head>

  <body>

    <?php include '../view/global/header_1.php';?>
    <h1>Blog</h1>
    <?php include '../view/global/header_2.php';?>

    <br>

    <div class="all-posts-container">

      <?php

      $servername = "localhost";

      $username = "root";

      $password = "";

      $database = "blog_db";

      $conn = new mysqli($servername, $username, $password, $database);

      if($conn->connect_error) die("Connection Error" . $conn->connect_error);

      $sql = "select id, titulo, fecha, img_file, parrafo, usuario_id from blog;";

      $result = $conn->query($sql);

      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc())
        {
          echo "<div style='padding: 25px 25px;' class='post-container'>";

          echo "<span id='displayTitle'>" . $row["titulo"] . "</span><br>";

          echo "<span id='displayDate'>" . $row["fecha"] . "</span><br><br>";

          // echo "<img style='width: 100%; height: auto' id='displayImage' src='img/" . $row["img_file"] . "'><br>";
          // echo "<img style='width: 100%; height: auto' id='displayImage' src='data:image/jpeg;base64,<?php echo base64_encode(" . $row["img_file"] . "); ? >' /> ";
          echo "<img style='width: 100%; height: auto' id='displayImage' src='getImage.php?id=".$row["id"]."' />";

          echo "<p style='overflow: hidden; display: -webkit-box; -webkit-line-clamp: 10; line-clamp: 10; -webkit-box-orient: vertical;' id='displayPara'>" . $row["parrafo"] . "</p><br>";
          
          echo "</div>";
        }
      }
      
      else
      {
        echo "<center><span>No Blog Posts Found</span></center>";
      
        // echo "<center><a style='color: dodgerblue;' href='blog_post.php'>Write a New Post</a></center>";
      }

      $conn->close();
      
      ?>

    </div>

    <?php echo "<br><center><a style='color: dodgerblue; text-decoration: none; background: dodgerblue; padding: 5px 25px; color: #fff; border-radius: 50px;' href='blog_post.php'>Write a New Post</a></center><br>"; ?>

  </body>
  
</html>