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
    <h2>Detalle de producto</h2>
    <div class="container">
    <ul>
<div class="" >
        <li>
    <strong>{{"Nombre"}}:</strong>
     {{$producto->nombre}}
     <br>
     <strong>{{"Descripcion"}}:</strong>
    {{$producto->descripcion}}
    <br>
    <strong>{{"Categoria"}}:</strong>
    {{ $producto->categoria}}
   
    <br>
    <strong>{{"Precio"}}:</strong>
        ${{$producto->precio}}
</div>
    <br>
    <div>
        <img src="/storage/{{$producto->imagen}}" height="250px">
       </div>
       <br>
       <input type="submit" value="Agregar al carrito">
       <br>
       <br>
    <form action="/producto/{{$producto->id}}" method="post">
        {{csrf_field()}}
       {{method_field('DELETE')}}
       <input type="submit" value="Eliminar">
    </form>
       <br>
       <br>
       <a href="/productos"><input type="submit" value="Volver"></a>
        </li>
    </ul>
</div>
</section>
@extends("layouts.footer")