<?php
if (realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"])) {
    exit;
}
include "global/menu.php";
include "global/footer.php"; ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

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
    <?php echo elMenu(); ?>
    <div>
    <br>
    <h2 class="text-center">Contacto</h2>
    <br>
  </div>

  
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title-bordered mb-5 d-flex align-items-center">
					<h1 class="h4">Tienes algo que decirme?</h1>
					<ul class="list-inline social-icons ml-auto mr-3 d-none d-sm-block">
						<li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a>
						</li>
						<li class="list-inline-item"><a href="#"><i class="ti-github"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="content mb-5">
					<h1 id="ask-us-anything-br-or-just-say-hi">Preguntame lo que sea! <br> O simplemente di hola :D</h1>
					<p>No es ningún secreto que la industria digital está en auge. Desde interesantes startups hasta marcas globales, las empresas se están acercando a las 
						<br>agencias digitales, respondiendo a las nuevas posibilidades disponibles. Sin embargo, la industria se está saturando rápidamente y está repleta 
                        <br>de agencias que ofrecen servicios similares....</p>
					<h4 class="mt-5">No te gusta usar formularios? Mandame un correo!</h4>
					<p><i class="ti-email mr-2 text-primary"></i><a href="mailto:correodeejemplo@dominio.cl">correodeejemplo@dominio.cl</a>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<form method="POST" action="#">
					<div class="form-group">
						<label for="name">Tu nombre (Necesario)</label>
						<input type="text" name="name" id="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email">Tu direccion de email (Necesario)</label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="message">Tu mensaje!</label>
						<textarea name="message" id="message" class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</section>

   <!-- JS Plugins -->
   <script src="./src/plugins/jQuery/jquery.min.js"></script>
   <script src="./src/plugins/bootstrap/bootstrap.min.js" async></script>
   <script src="./src/plugins/slick/slick.min.js"></script>

   <!-- Main Script -->
   <script src="./src/js/script.js"></script>

    <?php echo elFooter(); ?>
</body>