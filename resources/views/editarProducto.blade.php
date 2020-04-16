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
<<<<<<< HEAD
  <form action="" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
  <div>
      <strong><label for="nombre">Nombre: </label></strong>
=======
  <form action="/producto/{id}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PATCH')}}
  <div>
      <strong><label for="nombre">{{"Nombre"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
      <br>
      <input type="text" name="nombre" value="{{$producto->nombre}}">
  </div>
  <br>
   <div>
<<<<<<< HEAD
    <strong><label for="">Descripción: </label></strong>
   </div>
  <div>
   <textarea id="descripcion" name="descripcion" value="{{$producto->descripcion}}" placeholder="Escriba el contenido.."></textarea>
  </div>
  <br>
  <div>
    <strong><label for="precio">Precio: </label></strong>
=======
    <strong><label for="">{{"Descripción"}}: </label></strong>
   </div>
  <div>
   <textarea id="descripcion" name="descripcion" value="{{$producto->descripcion}}"></textarea>
  </div>
  <br>
  <div>
    <strong><label for="precio">{{"Precio"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
      <br>
      <input type="number" name="precio" step="0.01" value="{{$producto->precio}}">
     </div>
     <br>
     <div>
<<<<<<< HEAD
       <strong><label for="stock">Stock: </label></strong>
=======
       <strong><label for="stock">{{"Stock"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
         <br>
         <input type="number" name="stock" value="{{$producto->stock}}">
        </div>
        <br>
  <div>
<<<<<<< HEAD
    <strong><label for="imagen">Imagen: </label></strong>
=======
    <strong><label for="imagen">{{"Imagen"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
      <input type="file" name="imagen" id="">
    </div>
    <br>
  <input type="submit" value="Editar producto">
</form>
</div>
</div>
