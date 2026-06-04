<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Nuevo Proyecto</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Nuevo Proyecto</h2>

<form
action="../../router.php?accion=guardar"
method="POST">

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Tipo</label>

<input
type="text"
name="tipo"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Cliente</label>

<input
type="text"
name="cliente"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Responsable</label>

<input
type="text"
name="responsable"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Prioridad</label>

<select
name="prioridad"
class="form-control">

<option>ALTA</option>
<option>MEDIA</option>
<option>BAJA</option>

</select>

</div>

<button
type="submit"
class="btn btn-primary">

Guardar

</button>

</form>

</div>

</body>

</html>