<?php

function elMenu()
{
    ?>
    <header class="navbar navbar-expand-lg bd-navbar sticky-top bg-body shadow py-3">
        <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap container-menu">
            <div class="container-xl container-menu">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul id="menu-menu-principal" class="navbar-nav me-auto mb-2 mb-md-0 ">
                        <a href="index"><img src="./src/res/img/icono.png" alt="Bootstrap" width="50" class="me-3"></a>
                        <li
                            class="menu-item">
                            <a href="index" class="nav-link active">Inicio</a></li>
                        <li
                            class="menu-item">
                        <a href="blog" class="nav-link active">Blog</a></li>
                        <li
                                class="menu-item">
                            <a href="concierto" class="nav-link active">Conciertos</a></li>
                        <li
                                class="menu-item">
                            <a href="merch" class="nav-link active">Merch</a></li>
                        <li
                            class="menu-item">
                        <a href="noticias" class="nav-link active">Noticias</a></li>
                        <li
                            class="menu-item">
                        <a href="contacto" class="nav-link active">contacto</a></li>
                        <li
                                class="menu-item">
                            <a href="acerca" class="nav-link active">Acerca de</a></li>
                            <li
                                </li>
                    </ul>
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <li class="nav-item col-6 col-lg-auto"><a class="nav-link py-2 px-0 px-lg-2" href="https://www.instagram.com/"
                                                                  title="Instagram"
                                                                  target="_blank" rel="noopener"><i
                                        class="fa-brands fa-instagram"></i><small
                                        class="d-lg-none ms-2">RSS</small></a></li>
                        <li class="nav-item col-6 col-lg-auto"><a class="nav-link py-2 px-0 px-lg-2" href="/feed"
                                                                  title="RSS"
                                                                  target="_blank" rel="noopener"><i
                                        class="fa-solid fa-rss"></i><small
                                        class="d-lg-none ms-2">RSS</small></a></li>
                        <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 ms-lg-2 text-secondary"></div>
                            <hr class="d-lg-none my-2 text-secondary">
                        </li>
                        <li class="nav-item col-6 col-lg-auto px-lg-2">
                            <a class="nav-link py-2 px-0 px-lg-2" id="button-switch-theme" role="button">
                                <i class="fa fa-moon" id="bg-theme"></i>
                                <small class="d-lg-none ms-2" id="bg-theme-text">Modo oscuro</small>
                            </a>
                        </li>
                        <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="home.php">
                        <input class="form-control me-2 search-header" type="search" placeholder="Buscar"
                               aria-label="Search" value="" name="s"
                               title="Buscar:">
                        <button class="header-search-icon btn btn-link nav-link" title="Buscar" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                    </form>

                    <div class="text-end">
                    <!-- Boton modal Login -->
                    <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">
                    Login
                    </button>

                    <!-- Modal Login -->
                    <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabelLogin">Iniciar Sesion</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-signin w-100 m-auto">
                                        <form>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Email</p>
                                            </div>
                                            <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputLogin" placeholder="name@example.com">
                                            <label for="floatingInputLogin">Email@dominio.com</label>
                                            </div>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Contraseña</p>
                                            </div>
                                            <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingPasswordLogin" placeholder="Password">
                                            <label for="floatingPasswordLogin">Contraseña</label>
                                            </div>

                                            <div class="form-check text-start my-3">
                                            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefaultLogin">
                                            <label class="form-check-label" for="flexCheckDefaultLogin">
                                                Recordarme
                                            </label>
                                            </div>

                                            <div class="form-floating">
                                                <a href="recuperar" class="text-info-emphasis" target="_self">Olvide mi contraseña</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Iniciar sesion</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
            
        </nav>
        
    </header>

    <?php
}

?>