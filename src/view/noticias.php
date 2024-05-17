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
    <title>Noticias</title>

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

<section class="section">
	<div class="container">
        <div>
            <h2 class="">Ultimos blogs</h2>
            <br>
        </div>
		<div class="row">
			<div class="col-lg-8  mb-5 mb-lg-0">
				<article class="row mb-5">
					<div class="col-md-4 mb-4 mb-md-0">
						<div class="post-slider slider-sm">
							<img loading="lazy" src="./src//images/post/post-6.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;">
							<!-- <img loading="lazy" src="./src/images/post/post-1.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;">
							<img loading="lazy" src="./src/images/post/post-3.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;"> -->
						</div>
					</div>
					<div class="col-md-8">
						<h3 class="h5"><a class="post-title" href="post-elements.html">Concierto en Chicago: Todo lo que debes saber.</a></h3>
						<ul class="list-inline post-meta mb-2">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Fecha : Marzo 15, 2024</li>
							<li class="list-inline-item">Categorias : <a href="#!" class="ml-1">Musica </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Conciertos </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>Heading example Here is example of hedings. You can use this heading by following markdownify rules. …</p> <a href="post-elements.html" class="btn btn-outline-primary">Continuar leyendo</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-md-4 mb-4 mb-md-0">
						<div class="post-slider slider-sm">
							<img loading="lazy" src="./src/images/post/post-1.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;">
						</div>
					</div>
					<div class="col-md-8">
						<h3 class="h5"><a class="post-title" href="post-details-1.html">Horizontes y Oportunidades: Que esperar este 2024 respecto a...</a></h3>
						<ul class="list-inline post-meta mb-2">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Fecha : Marzo 14, 2024</li>
							<li class="list-inline-item">Categorias : <a href="#!" class="ml-1">Musica </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Conciertos </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>No es ningún secreto que la industria digital está en auge. Desde emocionantes startups hasta marcas globales,...</p> <a href="post-details-1.html" class="btn btn-outline-primary">Continuar leyendo</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-md-4 mb-4 mb-md-0">
						<div class="post-slider slider-sm">
							<img loading="lazy" src="./src/images/post/post-2.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;">
							<!-- <img loading="lazy" src="./src/images/post/post-4.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;"> -->
						</div>
					</div>
					<div class="col-md-8">
						<h3 class="h5"><a class="post-title" href="post-details-2.html">Donde los ojos abundan: Que esperar del nuevo festival y conciertos en...</a></h3>
						<ul class="list-inline post-meta mb-2">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Fecha : Marzo 14, 2024</li>
							<li class="list-inline-item">Categorias : <a href="#!" class="ml-1">Festivales </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Album </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>No es ningún secreto que la industria digital está en auge. Desde emocionantes startups hasta marcas globales,...</p> <a href="post-details-2.html" class="btn btn-outline-primary">Continuar leyendo</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-md-4 mb-4 mb-md-0">
						<div class="post-slider slider-sm">
							<img loading="lazy" src="./src/images/post/post-3.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;">
						</div>
					</div>
					<div class="col-md-8">
						<h3 class="h5"><a class="post-title" href="post-details-2.html">Disponibilidad regional y precios internacionales: lo que debes saber</a></h3>
						<ul class="list-inline post-meta mb-2">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Fecha : Marzo 14, 2024</li>
							<li class="list-inline-item">Categorias : <a href="#!" class="ml-1">Videoclips </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Video </a> ,<a href="#!" class="ml-1">Image </a>
							</li>
						</ul>
						<p>No es ningún secreto que la industria digital está en auge. Desde emocionantes startups hasta marcas globales,...</p> <a href="post-details-2.html" class="btn btn-outline-primary">Continuar leyendo</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-md-4 mb-4 mb-md-0">
						<div class="post-slider slider-sm">
							<img loading="lazy" src="./src/images/post/post-4.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;">
							<!-- <img loading="lazy" src="./src/images/post/post-1.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;"> -->
						</div>
					</div>
					<div class="col-md-8">
						<h3 class="h5"><a class="post-title" href="post-details-1.html">Lo que el trazo expreso: Como participar del nuevo evento auspiciado...</a></h3>
						<ul class="list-inline post-meta mb-2">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Fecha : Marzo 14, 2024</li>
							<li class="list-inline-item">Categorias : <a href="#!" class="ml-1">Festival de Viña </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Tours </a>
								,<a href="#!" class="ml-1">Lanzamientos </a>
							</li>
						</ul>
						<p>No es ningún secreto que la industria digital está en auge. Desde emocionantes startups hasta marcas globales,...</p> <a href="post-details-1.html" class="btn btn-outline-primary">Continuar leyendo</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-md-4 mb-4 mb-md-0">
						<div class="post-slider slider-sm">
							<img loading="lazy" src="./src/images/post/post-5.jpg" class="img-fluid" alt="post-thumb" style="height:200px; object-fit: cover;">
						</div>
					</div>
					<div class="col-md-8">
						<h3 class="h5"><a class="post-title" href="post-details-1.html">El comienzo de una nueva era: Redefiniendo la cultura del pais una cancion a...</a></h3>
						<ul class="list-inline post-meta mb-2">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Fecha : Marzo 14, 2024</li>
							<li class="list-inline-item">Categorias : <a href="#!" class="ml-1">Ñuble </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Chillan </a> ,<a href="#!" class="ml-1">Conciertos </a>
							</li>
						</ul>
						<p>No es ningún secreto que la industria digital está en auge. Desde emocionantes startups hasta marcas globales,...</p> <a href="post-details-1.html" class="btn btn-outline-primary">Continuar leyendo</a>
					</div>
				</article>
				<article class="row mb-5">
					<div class="col-12">
						<h3 class="h5"><a class="post-title" href="post-details-2.html">Informacion y Actualizaciones importantes para futuros fans</a></h3>
						<ul class="list-inline post-meta mb-2">
							<li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John Doe</a>
							</li>
							<li class="list-inline-item">Fecha : Marzo 14, 2024</li>
							<li class="list-inline-item">Categorias : <a href="#!" class="ml-1">Ñuble </a>
							</li>
							<li class="list-inline-item">Tags : <a href="#!" class="ml-1">Chillan </a> ,<a href="#!" class="ml-1">Conciertos </a>
							</li>
						</ul>
						<p>No es ningún secreto que la industria digital está en auge. Desde interesantes startups hasta marcas globales, las empresas se están acercando a las agencias digitales, respondiendo a las nuevas posibilidades disponibles. Sin embargo, la industria se está saturando rápidamente y está repleta de agencias que ofrecen servicios similares...</p> <a href="post-details-2.html" class="btn btn-outline-primary">Continuar leyendo</a>
					</div>
				</article>
			</div>
			<aside class="col-lg-4">
				   <!-- Search -->
   <div class="widget">
      <h5 class="widget-title"><span>Buscar</span></h5>
      <form action="/logbook-hugo/search" class="widget-search">
         <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
         <button type="submit"><i class="ti-search"></i>
         </button>
      </form>
   </div>
   <!-- Categorias -->
   <div class="widget">
      <h5 class="widget-title"><span>Categorias</span></h5>
      <ul class="list-unstyled widget-list">
         <li><a href="#!" class="d-flex">Festival de Viña
               <small class="ml-auto">(1)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Ñuble
               <small class="ml-auto">(2)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Festivales
               <small class="ml-auto">(1)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Musica
               <small class="ml-auto">(2)</small></a>
         </li>
         <li><a href="#!" class="d-flex">Videoclips
               <small class="ml-auto">(1)</small></a>
         </li>
      </ul>
   </div>
   <!-- tags -->
   <div class="widget">
      <h5 class="widget-title"><span>Tags</span></h5>
      <ul class="list-inline widget-list-inline">
         <li class="list-inline-item"><a href="#!">Album</a>
         </li>
         <li class="list-inline-item"><a href="#!">Chillan</a>
         </li>
         <li class="list-inline-item"><a href="#!">Image</a>
         </li>
         <li class="list-inline-item"><a href="#!">Lanzamientos</a>
         </li>
         <li class="list-inline-item"><a href="#!">Conciertos</a>
         </li>
         <li class="list-inline-item"><a href="#!">Tours</a>
         </li>
         <li class="list-inline-item"><a href="#!">Video</a>
         </li>
      </ul>
   </div>
   <!-- latest post -->
   <div class="widget">
      <h5 class="widget-title"><span>Ultimos articulos</span></h5>
      <!-- post-item -->
      <ul class="list-unstyled widget-list">
         <li class="media widget-post align-items-center">
            <a href="post-elements.html">
               <img loading="lazy" class="mr-3" src="./src/images/post/post-6.jpg">
            </a>
            <div class="media-body">
               <h5 class="h6 mb-0"><a href="post-elements.html">Concierto en Chicago: Todo lo que debes saber.</a></h5>
               <small>Marzo 15, 2024</small>
            </div>
         </li>
      </ul>
      <ul class="list-unstyled widget-list">
         <li class="media widget-post align-items-center">
            <a href="post-details-1.html">
               <img loading="lazy" class="mr-3" src="./src/images/post/post-1.jpg">
            </a>
            <div class="media-body">
               <h5 class="h6 mb-0"><a href="post-details-1.html">Horizontes y Oportunidades: Que esperar este 2024 respecto a...</a>
               </h5>
               <small>Marzo 14, 2024</small>
            </div>
         </li>
      </ul>
      <ul class="list-unstyled widget-list">
         <li class="media widget-post align-items-center">
            <a href="post-details-2.html">
               <img loading="lazy" class="mr-3" src="./src/images/post/post-2.jpg">
            </a>
            <div class="media-body">
               <h5 class="h6 mb-0"><a href="post-details-2.html">Donde los ojos abundan: Que esperar del nuevo festival y conciertos en...</a>
               </h5>
               <small>Marzo 14, 2024</small>
            </div>
         </li>
      </ul>
   </div>
			</aside>
		</div>
	</div>
</section>

    <?php echo elFooter(); ?>
</body>