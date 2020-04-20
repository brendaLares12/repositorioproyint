@extends("layouts.header")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container col-md-6">

  <h2>Editar categoría</h2>
 
  <div class="contenedor-form" align= "center">
  <form action="/categoria/{{$categoria->id}}/editar" method="post">
      {{csrf_field()}}
     
      <strong><label for="nombre">{{"Nombre"}}: </label></strong>
      <br>
      <input type="text" name="nombre" value="{{$categoria->nombre}}">
      <br>
      <button type="submit">Guardar</button>
    <a href="/crud-categorias" class="btn btn-default">Cancelar</a>
  </form>
  </div>
</div>
