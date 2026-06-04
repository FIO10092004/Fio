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

        $stmt = $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtener($id)
    {
        $sql = "
            SELECT *
            FROM proyectos
            WHERE id = ?
        ";

        $stmt = $this->conexion->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function guardar($datos)
    {
        $sql = "
        INSERT INTO proyectos
        (
            nombre,
            tipo,
            cliente,
            responsable,
            prioridad,
            avance,
            estado,
            fecha_inicio,
            fecha_entrega,
            carpeta,
            observaciones
        )
        VALUES
        (
            ?,?,?,?,?,?,?,?,?,?,?
        )
        ";

        $stmt = $this->conexion->prepare($sql);

        return $stmt->execute([
            $datos['nombre'],
            $datos['tipo'],
            $datos['cliente'],
            $datos['responsable'],
            $datos['prioridad'],
            $datos['avance'],
            $datos['estado'],
            $datos['fecha_inicio'],
            $datos['fecha_entrega'],
            $datos['carpeta'],
            $datos['observaciones']
        ]);
    }
}