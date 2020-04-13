@include("layouts.header")
<main style="margin-top:200px">
    <div class="listado-productos">
          <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos de papelería</span></h5>
          <div class="row justify-content-around">
             @foreach ($productos as $producto)
             <div class="col-md-4">
             <div class="container-cards">
                <div class="img">
                <a href="/carrito"><img src="img/mochilas.jpg" alt="" height="300px"></a>
                <header>
                    <h4 class="card-title">{{$producto->nombre}}</h4>
                </header>
                <p class="precio">{{$producto->precio}}</p>
                  </div>
                 </div>
             @endforeach

             </div>

        </div>
     </div>
    </main>
@include("layouts.footer")


    
      
        
          
   
    