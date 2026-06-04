<?php

require_once __DIR__ . '/../models/Proyecto.php';

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

        require_once
        'views/proyectos/index.php';
    }

    public function crear()
    {
        require_once
        'views/proyectos/crear.php';
    }

    public function guardar()
    {
        $this->modelo->guardar($_POST);

        header(
            "Location: index.php"
        );
    }
}