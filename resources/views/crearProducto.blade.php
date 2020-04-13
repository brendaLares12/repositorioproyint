@include("layouts.header")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
    <h1>Agregado de productos: </h1>

    <ul style="color:red" class="errores">
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
      </ul>
  
    <div class="container">
    <form action="/listado-papeleria" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <div>
        <label for="nombre">Nombre: </label>
        <br>
        <input type="text" name="nombre" value="{{old("nombre")}}">
    </div>
    <br>
     <div>
     <label for="">Descripción: </label>
     </div>
    <div>
     <textarea id="descripcion" name="descripcion" cols="15" rows="2" placeholder="Escriba el contenido"></textarea>
    </div>
    <br>
    <div>
        <label for="precio">Precio: </label>
        <br>
        <input type="number" name="precio" value="">
       </div>
       <br>
    <div>
        <label for="imagen">Imagen: </label>
        <input type="file" name="imagen" id="">
      </div>
      <br>
      <div>
        <label for="">Categoría: </label>
          <select name="" id="categoria_id">
              <option value="">-- Escoja la categoría --</option>
              @foreach ($categorias as $categoria)
              <option value="" name="categoria_id">{{ $categoria->nombre}}</option>
              @endforeach
            </select>
      </div>
      <br>
    <input type="submit" value="Agregar producto">
 </form>
</div>
 @include("layouts.footer")
