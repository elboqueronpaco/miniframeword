<?php

if ($_GET && isset($_GET["controller"])) {
    $controllerDefault= strtolower(ucwords($_GET["controller"]));
    if (file_exists("./controllers/{$controllerDefault}.php")) {
        require_once "controllers/{$controllerDefault}.php";
    }else {
        die("{$controllerDefault} no se encontrado");
    }
}else {
    $controllerDefault= CONTROLLER_DEFAULT;
    if (file_exists("controllers/{$controllerDefault}.php")) {
        require_once "controllers/{$controllerDefault}.php";
    }else {
        die("{$controllerDefault} no se encontrado");
    }
}
$controllerClass = new $controllerDefault();