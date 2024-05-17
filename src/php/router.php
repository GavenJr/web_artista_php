<?php
$requestUri = $_SERVER['REQUEST_URI'];
$scriptName = $_SERVER['SCRIPT_NAME'];
$baseUri = str_replace(basename($scriptName), '', $scriptName);
$request = trim(str_replace($baseUri, '', $requestUri), '/');
echo "<script>console.log('Debug Objects: " . $request . "' );</script>";

// Enrutamiento
switch ($request) {
    case '';
    case 'index.php':
    case 'index':
        require './src/view/home.php';
        exit();
    case 'concierto':
        require './src/view/concierto.php';
        exit();
    case 'acerca':
        require './src/view/acerca.php';
        exit();
    case 'blog':
        require './src/view/blog.php';
        exit();
    case 'merch':
        require './src/view/merch.php';
        exit();

}

