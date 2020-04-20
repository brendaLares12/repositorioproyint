@extends("layouts.header")

<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
      
    <h5 class="detalle-libros"><span class="detalle-libros1">{{"Libretas, Agendas y Calendarios"}}</span></h5>
 <br>
  <div class="">
      <table class="d-none d-lg-block" style="width:20%">
       <tr>
         <th>Categorías</th>
       </tr>
       <tr>
        <td><a href="/litUniversal">{{"Literatura Universal"}}</a></td>
       </tr>
       <tr>
         <td><a href="/litJuvenil">{{"Literatura Infantil/Juvenil"}}</a></td>
       </tr>
       <tr>
         <td><a href="/historiaUniversal">{{"Historia Universal"}}</a></td>
       </tr>
       <tr>
         <td><a href="/utiles">{{"Útiles Escolares"}}</a></td>
       </tr>
       <tr>
         <td><a href="/libAgendas">{{"Libretas y Agendas"}}</a></td>
       </tr>
       <tr>
         <td><a href="/tarjetas">{{"Tarjetas personalizadas"}}</a></td>
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
        </div>
      </div>
    </div>
</main>