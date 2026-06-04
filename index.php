<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/conexion.php';
$proyectos = $conexion
->query("
SELECT *
FROM proyectos
ORDER BY id DESC
")
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Proyectos</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

    <h2>
        Listado de Proyectos
    </h2>

    <a
    href="router.php?accion=crear"
    class="btn btn-success">

        Nuevo Proyecto

    </a>

    <hr>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Responsable</th>
                <th>Avance</th>
                <th>Estado</th>

            </tr>

        </thead>

        <tbody>

        <?php foreach($proyectos as $p): ?>

            <tr>

                <td>
                    <?= $p['id'] ?>
                </td>

                <td>
                    <?= $p['nombre'] ?>
                </td>

                <td>
                    <?= $p['tipo'] ?>
                </td>

                <td>
                    <?= $p['responsable'] ?>
                </td>

                <td>
                    <?= $p['avance'] ?>%
                </td>

                <td>

                    <?php
                    if($p['estado']=='EN_PROGRESO')
                    {
                        echo '<span class="badge bg-primary">EN PROGRESO</span>';
                    }
                    elseif($p['estado']=='FINALIZADO')
                    {
                        echo '<span class="badge bg-success">FINALIZADO</span>';
                    }
                    else
                    {
                        echo '<span class="badge bg-warning text-dark">STAND BY</span>';
                    }
                    ?>

                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

    <a
    href="index.php"
    class="btn btn-secondary">

        Volver al Dashboard

    </a>

</div>

</body>

</html>