<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title>
Nuevo Proyecto
</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>

Nuevo Proyecto

</h2>

<form
method="POST"
action="?accion=guardar">

<div class="mb-3">

<label>

Nombre

</label>

<input
type="text"
name="nombre"
class="form-control">

</div>

<div class="mb-3">

<label>

Tipo

</label>

<select
name="tipo"
class="form-control">

<option>SCRIPT</option>
<option>SISTEMA</option>
<option>LABORATORIO</option>
<option>TALLER</option>

</select>

</div>

<div class="mb-3">

<label>

Cliente

</label>

<input
type="text"
name="cliente"
class="form-control">

</div>

<div class="mb-3">

<label>

Responsable

</label>

<input
type="text"
name="responsable"
class="form-control">

</div>

<div class="mb-3">

<label>

Prioridad

</label>

<select
name="prioridad"
class="form-control">

<option>BAJA</option>
<option>MEDIA</option>
<option>ALTA</option>

</select>

</div>

<div class="mb-3">

<label>

Fecha Inicio

</label>

<input
type="date"
name="fecha_inicio"
class="form-control">

</div>

<div class="mb-3">

<label>

Fecha Entrega

</label>

<input
type="date"
name="fecha_entrega"
class="form-control">

</div>

<input
type="hidden"
name="avance"
value="0">

<input
type="hidden"
name="estado"
value="STAND_BY">

<input
type="hidden"
name="carpeta"
value="">

<textarea
name="observaciones"
class="form-control">
</textarea>

<br>

<button
class="btn btn-primary">

Guardar

</button>

</form>

</div>

</body>

</html>