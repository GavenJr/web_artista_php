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
                            <a href="acerca" class="nav-link active">Acerca de</a></li>
                        <li
                                class="menu-item">
                            <a href="concierto" class="nav-link active">Conciertos</a></li>
                        <li
                                class="menu-item">
                            <a href="blog" class="nav-link active">Blog</a></li>
                        <li
                                class="menu-item">
                            <a href="merch" class="nav-link active">Merch</a></li>
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
                    <form class="d-flex" role="search" action="/">
                        <input class="form-control me-2 search-header" type="search" placeholder="Buscar"
                               aria-label="Search" value="" name="s"
                               title="Buscar:">
                        <button class="header-search-icon btn btn-link nav-link" title="Buscar" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <?php
}

?>