@extends("layouts.header")
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section>
    <div class="container">
    <h2>Detalle de producto</h2>
    <div class="container">
    <ul>
<div style= "float:right">
        <li>
    <strong>{{"Nombre"}}:</strong>
     {{$producto->nombre}}
     <br>
     <strong>{{"Descripcion"}}:</strong>
    {{$producto->descripcion}}
    <br>
    <strong>{{"Categoria"}}:</strong>
    {{ $producto->categoria_id}}
   
    <br>
    <strong>{{"Precio"}}:</strong>
        ${{$producto->precio}}
</div>
    <br>
    <div>
        <img src="/storage/{{$producto->imagen}}" height= "550px" style="border:black">
       </div>
       <br>
       <div>
       <input type="submit" value="Agregar al carrito">
     </div>
       <br>
       <br>
       <a href="/productos"><input type="submit" value="Volver"></a>
        </li>
    </ul>
</div>
</section>
</div>
@extends("layouts.footer")