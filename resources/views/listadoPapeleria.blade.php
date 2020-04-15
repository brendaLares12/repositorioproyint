@include("layouts.header")
<main style="margin-top:200px">
  
    <div class="listado-productos">
     
        <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos de papelería</span></h5>
        
        <section>
        <div class="row justify-content-around">
          @foreach ($productos as $producto)
          <div class="col-lg-4 col-md-6 col-sm-9">
          <div class="card" style="width:250px" align="center">
            <img src="storage/{{$producto->imagen}}" alt="" width="300px" height="250px">
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
 
</main>
  @include("layouts.footer")

    
      
        
          
   
    