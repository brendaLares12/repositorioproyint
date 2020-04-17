@extends("layouts.headyfoot")

<main style="margin-top:200px">

    <div class="listado-productos">

        <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>


<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
    <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>

  <div class="">
      <table class="d-none d-md-block" style="width:25%">
       <tr>
         <th>Categorías</th>
       </tr>
       <tr>
         <td>Literatura Universal</td>
       </tr>
       <tr>
         <td>Literatura Infantil/Juvenil</td>
       </tr>
       <tr>
         <td>Historia Universal</td>
       </tr>
       <tr>
         <td>Útiles Escolares</td>
       </tr>
       <tr>
         <td>Libretas y Agendas</td>
       </tr>
       <tr>
         <td>Tarjetas personalizadas</td>
       </tr>
      </table>

        <section>
        <div class="row justify-content-around">
          @foreach ($productos as $producto)
          <div class="col-sm-9 col-md-6 col-lg-4">
          <div class="card" style="width:250px" align="center">

            <img src="storage/{{$producto->imagen}}" alt="" width="300px" height="250px">

            <table>
            <tr>
            <img class="image" src="storage/{{$producto->imagen}}" alt="" width="250px" height="250px">
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
        </div>

    </div>

      </div>
</main>