<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

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
href="../../router.php?accion=crear"
class="btn btn-success">

Nuevo Proyecto

</a>

<hr>

<table class="table table-bordered">

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

<td><?= $p['id'] ?></td>
<td><?= $p['nombre'] ?></td>

<td><?= $p['tipo'] ?></td>

<td><?= $p['responsable'] ?></td>

<td><?= $p['avance'] ?>%</td>

<td><?= $p['estado'] ?></td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</body>

</html>