<?php

require_once 'models/Proyecto.php';

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
        $dd = $this->modelo->listar();

        require
        'views/proyectos/index.php';
    }

    public function crear()
    {
        require
        'views/proyectos/crear.php';
    }

    public function guardar()
    {
        $this->modelo->guardar($_POST);

        header(
            "Location:index.php"
        );
    }
}