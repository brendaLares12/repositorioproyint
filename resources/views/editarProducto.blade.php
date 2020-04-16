@extends("layouts.headyfoot")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container col-md-6">
  <h2>Editar producto</h2>
  <div class="contenedor-form">
  <form action="/producto/{id}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PATCH')}}
  <div>
      <strong><label for="nombre">{{"Nombre"}}: </label></strong>
      <br>
      <input type="text" name="nombre" value="{{$producto->nombre}}">
  </div>
  <br>
   <div>
    <strong><label for="">{{"Descripción"}}: </label></strong>
   </div>
  <div>
   <textarea id="descripcion" name="descripcion" value="{{$producto->descripcion}}"></textarea>
  </div>
  <br>
  <div>
    <strong><label for="precio">{{"Precio"}}: </label></strong>
      <br>
      <input type="number" name="precio" step="0.01" value="{{$producto->precio}}">
     </div>
     <br>
     <div>
       <strong><label for="stock">{{"Stock"}}: </label></strong>
         <br>
         <input type="number" name="stock" value="{{$producto->stock}}">
        </div>
        <br>
  <div>
    <strong><label for="imagen">{{"Imagen"}}: </label></strong>
      <input type="file" name="imagen" id="">
    </div>
    <br>
  <input type="submit" value="Editar producto">
</form>
</div>
</div>
