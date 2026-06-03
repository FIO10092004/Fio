<?php

require_once 'config/conexion.php';

require_once 'controllers/ProyectoController.php';

$controller =
new ProyectoController($conexion);

$controller->index();