@extends("layouts.header")

<main style="margin-top:200px">


<main class="main-products" style="margin-top:200px">

    <div class="listado-productos">
      
    <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos</span></h5>

  <div class="">
      <table class="d-none d-lg-block">
       <div>
       <tr>
        <td><a href="/litUniversal">{{"Literatura Universal"}}</a></td>
       </tr>
      </div>
      <div>
       <tr>
         <td><a href="/litJuvenil">{{"Literatura Infantil/Juvenil"}}</a></td>
       </tr>
      </div>
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
            <tr style="padding-top:10px">
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
        <div class="container">
         {{$productos->links()}} 
        </div>
        
        </div>
       

    </div>

      </div>
</main>
@extends("layouts.footer")