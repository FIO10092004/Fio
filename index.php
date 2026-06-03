<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/conexion.php';

/*
|--------------------------------------------------------------------------
| CONSULTAS DASHBOARD
|--------------------------------------------------------------------------
*/

$totalProyectos = $conexion
->query("SELECT COUNT(*) FROM proyectos")
->fetchColumn();

$enProgreso = $conexion
->query("
SELECT COUNT(*)
FROM proyectos
WHERE estado='EN_PROGRESO'
")
->fetchColumn();

$standBy = $conexion
->query("
SELECT COUNT(*)
FROM proyectos
WHERE estado='STAND_BY'
")
->fetchColumn();

$finalizados = $conexion
->query("
SELECT COUNT(*)
FROM proyectos
WHERE estado='FINALIZADO'
")
->fetchColumn();

$proyectos = $conexion
->query("
SELECT *
FROM proyectos
ORDER BY id DESC
")
->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>
Sistema de Gestión de Tareas
</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
    background:#f4f6f9;
}

.sidebar{

    width:250px;
    height:100vh;

    position:fixed;

    background:#1f2937;

    color:white;
}

.sidebar a{

    color:white;

    text-decoration:none;

    display:block;

    padding:12px 20px;
}

.sidebar a:hover{

    background:#374151;
}

.content{

    margin-left:250px;

    padding:20px;
}

.card-dashboard{

    border:none;

    box-shadow:
    0 2px 10px rgba(0,0,0,.1);
}

</style>

</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <h4 class="p-3">

        GESTIÓN TAREAS

    </h4>

    <hr>

    <a href="index.php">

        Dashboard

    </a>

    <a href="proyectos/index.php">

        Proyectos

    </a>

    <a href="actividades/index.php">

        Actividades

    </a>

    <a href="modificaciones/index.php">

        Modificaciones

    </a>

    <a href="componentes/index.php">

        Componentes

    </a>

    <a href="historial/index.php">

        Historial

    </a>

    <a href="clientes/index.php">

        Clientes

    </a>

    <a href="propuestas/index.php">

        Propuestas Económicas

    </a>

</div>

<!-- CONTENIDO -->

<div class="content">

    <h2>

        Dashboard

    </h2>

    <hr>

    <div class="row">

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <h5>

                        Total Proyectos

                    </h5>

                    <h2>

                        <?= $totalProyectos ?>

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <h5>

                        En Progreso

                    </h5>

                    <h2>

                        <?= $enProgreso ?>

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <h5>

                        Stand By

                    </h5>

                    <h2>

                        <?= $standBy ?>

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <h5>

                        Finalizados

                    </h5>

                    <h2>

                        <?= $finalizados ?>

                    </h2>

                </div>

            </div>

        </div>

    </div>

    <br>

    <div class="card">

        <div class="card-header">

            Últimos Proyectos

        </div>

        <div class="card-body">

            <table
            class="table table-bordered">

                <thead>

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
                        <?= $p['estado'] ?>
                    </td>

                </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>

</html>