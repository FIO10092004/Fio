<?php

require_once __DIR__ .
'/../models/Proyecto.php';

class ProyectoController
{
    private $modelo;

    public function __construct($conexion)
    {
        $this->modelo =
        new Proyecto($conexion);
    }

    public function index()
    {
        $proyectos =
        $this->modelo->listar();

        require_once __DIR__ .
        '/../views/proyectos/index.php';
    }
}