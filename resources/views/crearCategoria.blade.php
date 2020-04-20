@extends("layouts.header")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section>
<div>
  <h2>Agregar categoría: </h2>
 </div>

    <ul style="color:red" class="errores">
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
      </ul>

  <div class="container col-md-6">
    <div class="contenedor-form">
    <form action="/categoria/crear" method="post">
        {{csrf_field()}}
    <div>
        <strong><label for="nombre">{{"Nombre"}}: </label></strong>
        <br>
        <input type="text" name="nombre" value="">
    </div>
    <br>
    <button type="submit">Guardar</button>
    <a href="/crud-categorias" class="btn btn-default">Cancelar</a>
 </form>
</div>
</div>
</section>
@extends("layouts.footer")