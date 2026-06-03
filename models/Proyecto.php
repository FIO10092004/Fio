<?php

class Proyecto
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function listar()
    {
        $sql = "
            SELECT *
            FROM proyectos
            ORDER BY id DESC
        ";

        $stmt =
        $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(
            PDO::FETCH_ASSOC
        );
    }
}