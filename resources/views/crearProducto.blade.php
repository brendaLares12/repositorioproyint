@extends("layouts.headyfoot")
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
  <h2>Agregar productos: </h2>
 </div>

    <ul style="color:red" class="errores">
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
      </ul>

  <div class="container col-md-6">
    <div class="contenedor-form">
    <form action="/producto/crear" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <div>
<<<<<<< HEAD
        <strong><label for="nombre">Nombre: </label></strong>
=======
        <strong><label for="nombre">{{"Nombre"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
        <br>
        <input type="text" name="nombre" value="{{old("nombre")}}">
    </div>
    <br>
     <div>
<<<<<<< HEAD
      <strong><label for="">Descripción: </label></strong>
=======
      <strong><label for="">{{"Descripción"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
     </div>
    <div>
     <textarea id="descripcion" name="descripcion" value="{{old("descripcion")}}" placeholder="Escriba el contenido.."></textarea>
    </div>
    <br>
    <div>
<<<<<<< HEAD
      <strong><label for="precio">Precio: </label></strong>
=======
      <strong><label for="precio">{{"Precio"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
        <br>
        <input type="number" name="precio" step="0.01" value="{{old("precio")}}">
       </div>
       <br>
       <div>
<<<<<<< HEAD
         <strong><label for="stock">Stock: </label></strong>
=======
         <strong><label for="stock">{{"Stock"}}: </label></strong>
>>>>>>> cabf78411e319e47d07bbb32846d896f4fff234b
           <br>
           <input type="number" name="stock" value="">
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
      <div>
        <strong><label for="">Categoría: </label></strong>
        <select name="categoria_id" id="categoria_id">
          <option value="">-- Escoja la categoría --</option>
          @foreach ($categorias as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
              @endforeach
            </select>
      </div>
      <br>
    <input type="submit" value="Agregar producto">
 </form>
</div>
</div>
</section>
