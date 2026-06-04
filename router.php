<?php

require_once 'config/conexion.php';

require_once 'controllers/ProyectoController.php';

$controller =
new ProyectoController($conexion);

$accion =
$_GET['accion']
?? 'index';

switch($accion)
{
    case 'crear':

        $controller->crear();

        break;

    case 'guardar':

        $controller->guardar();

        break;

    default:

        $controller->index();

        break;
}