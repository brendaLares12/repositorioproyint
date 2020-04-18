@extends("layouts.headyfoot")

<main style="margin-top:200px">


<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
      
    <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>

  <div class="">
      <table class="d-none d-md-block" style="width:25%">
       <tr>
         <th>Categorías</th>
       </tr>
       <tr>
        <td><a href="">{{"Literatura Universal"}}</a></td>
       </tr>
       <tr>
         <td><a href="">{{"Literatura Infantil/Juvenil"}}</a></td>
       </tr>
       <tr>
         <td><a href="">{{"Historia Universal"}}</a></td>
       </tr>
       <tr>
         <td><a href="">{{"Útiles Escolares"}}</a></td>
       </tr>
       <tr>
         <td><a href="">{{"Libretas y Agendas"}}</a></td>
       </tr>
       <tr>
         <td><a href="">{{"Tarjetas personalizadas"}}</a></td>
       </tr>
      </table>

        <section>
        <div class="row justify-content-around">
          @foreach ($productos as $producto)
          <div class="col-sm-9 col-md-6 col-lg-4">
          <div class="card" style="width:250px" align="center">

            <table>
            <tr>
            <a href="/producto/{{$producto->id}}"><img class="image" src="storage/{{$producto->imagen}}" alt="" width="250px" height="250px"></a>
          </tr>
        </table>

            <div class="card-body">
              <h4 class="card-title" ><strong>{{$producto->nombre}}</strong></h4>
              <p class="card-text">${{$producto->precio}}</p>
            </div>
          </div>
          </div>
          @endforeach
        </section>
        {{$productos->links()}}
        </div>
       

    </div>

      </div>
</main>