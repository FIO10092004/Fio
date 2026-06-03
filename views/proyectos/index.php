<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>
Gestión de Tareas
</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>

Gestión de Tareas

</h2>

<hr>

<table
class="table table-bordered">

<tr>

<th>ID</th>

<th>Nombre</th>

<th>Tipo</th>

<th>Responsable</th>

<th>Prioridad</th>

<th>Avance</th>

<th>Estado</th>

</tr>

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
<?= $p['prioridad'] ?>
</td>

<td>
<?= $p['avance'] ?>%
</td>

<td>
<?= $p['estado'] ?>
</td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>

</html>