<?php


    function elFooter()
    {
?>

<footer class="section-sm pb-0 border-top border-default">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-md-3 mb-4">
               <a class="mb-4 d-block" href="index.html">
                  <img class="img-fluid" width="150px" src="./src/images/" alt="El Artista">
               </a>
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
               <h6 class="mb-4">Acceso Rapido</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="acerca">Acerca de</a></li>
                  <li><a href="contacto">Contacto</a></li>
                  <li><a href="concierto">Conciertos</a></li>
                  <li><a href="noticias">Noticias</a></li>
               </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mb-4">
               <h6 class="mb-4">Social</h6>
               <ul class="list-unstyled footer-list">
                  <li><a href="#">Spotify</a></li>
                  <li><a href="#">Apple Music</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">YouTube</a></li>
               </ul>
            </div>

            <div class="col-md-3 mb-4">
               <h6 class="mb-4">Enterate de proximos lanzamientos!</h6>
               <form class="subscription" action="javascript:void(0)" method="post">
                  <div class="position-relative">
                     <i class="ti-email email-icon"></i>
                     <input type="email" class="form-control" placeholder="Tu correo electronico">
                  </div>
                  <button class="btn btn-primary btn-block rounded" type="submit">Subscribirse</button>
               </form>
            </div>
         </div>
         <div class="scroll-top">
            <a href="javascript:void(0);" id="scrollTop"><i class="ti-angle-up"></i></a>
         </div>
         <div class="text-center">
            <p class="content">&copy; 2024 - Electivo de PHP &amp;-&amp; Un proyecto por Gerardo Cifuentes y Gabriel Venegas </p>
         </div>
      </div>
   </footer>

<?php

    }
?>