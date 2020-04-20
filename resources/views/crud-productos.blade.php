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
 
<table class="table">
  <button class="btn btn-primary1" style="background-color:rosybrown">
    <a href="/producto/crear">Nuevo producto</a>
  </button>
  <br>
  <br>
    <thead>
      <tr style="background-color:palevioletred">
        <th scope="col">id</th>
        <th scope="col">Producto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($productos as $producto)
      <tr>
        <th scope="row" style="background-color:yellowgreen">{{$producto->id}}</th>
        <td style="background-color:pink">{{$producto->nombre}}</td>
        <td style="background-color:pink">{{$producto->categoria_id}}</td>
        <td style="background-color:pink">{{$producto->stock}}</td>
        <td style="background-color:pink">${{$producto->precio}}</td>
        <td style="background-color:pink">

        <form action="" method="post">
            {{csrf_field()}}
            <div class="d-flex flex-row">
               <button style="background-color:rosybrown" class="btn btn-primary1">
                 <a href="/producto/{{$producto->id}}">Ver</a></button>
               <button style="background-color:rosybrown" class="btn btn-primary1"> 
                <a href="/producto/{{$producto->id}}/editar">Editar</a></button>
            </div>
        </form>
        <form action="/producto/{{$producto->id}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
        <button style="background-color:rosybrown" class="btn btn-primary1" type="submit">Eliminar</button> 
      </tr>
      @endforeach
    </tbody>
  </table>
</section>



  