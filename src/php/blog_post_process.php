<?php

// error_reporting(0);

include("db_config.php");

$blogTitle = $_POST["blogtitle"];

$blogDate = $_POST["blogdate"];

$blogPara = $_POST["blogpara"];

$filename = "NONE";

if(isset($_FILES['uploadimage']))
{
  $GLOBALS['filename'] = $_FILES['uploadimage']['name'];
  
  $tempname = $_FILES['uploadimage']['tmp_name'];
  
  move_uploaded_file($tempname, "images/" . $GLOBALS['filename']);
}

$sql = "insert into blog (titulo, fecha, img_file, parrafo) values ('" . $blogTitle . "', '" . $blogDate . "', '" . $filename . "', '" . $blogPara . "');";

if($conn->query($sql) === TRUE)
{
  echo "";
}

else
{
  echo "Error Saving Post";
}

$conn->close();

?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Post Saved</title>

    <link rel="stylesheet" href="styles/style.css">

  </head>

  <body>

  <?php include '../view/global/header_1.php';?>
    <h1>Blog</h1>
    <?php include '../view/global/header_2.php';?>

    <div class="container" style="width: 50%; margin: auto; text-align: justify; font-family: Roboto, sans-serif;">

      <h1 style="margin-bottom: 10px; text-align: center;">Post Saved</h1>

      <center><a style="color: dodgerblue;" href="../../index.php">Go to Home Page</a></center>
      
      <br><br>

      <?php echo "<span style='font-weight: bold;' id='showTitle'>" . $blogTitle . "</span>" ?>
      <br>

      <span id="showDate"><?php echo $blogDate ?></span><br><br>

      <center><img src="images/<?php echo $filename; ?>" id="showImage" style="width: 50%; height: auto;"></center>

      <br>

      <?php echo "<span id='showPara'>" . $blogPara . "</span>" ?>

      <br><br>
      
    </div>

  </body>
  
</html>