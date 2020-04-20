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
    <a href="/categoria/crear">Nueva categoria</a>
  </button>
  <br>
  <br>
    <thead>
      <tr style="background-color:palevioletred">
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categorias as $categoria)
      <tr>
        <th scope="row" style="background-color:yellowgreen">{{$categoria->id}}</th>
        <td style="background-color:pink">{{$categoria->nombre}}</td>
        <td style="background-color:pink">

        <form action="" method="post">
            {{csrf_field()}}
            <div class="d-flex flex-row">
               <button style="background-color:rosybrown" class="btn btn-primary1"> 
                <a href="/categoria/{{$categoria->id}}/editar">Editar</a></button>
            </div>
        </form>
        <form action="/categoria/{{$categoria->id}}" method="post" class="crud-eliminar">
          {{csrf_field()}}
          {{method_field('DELETE')}}
        <button style="background-color:rosybrown" class="btn btn-primary1" type="submit">Eliminar</button> 
      </tr>
      @endforeach
    </tbody>
  </table>
</section>