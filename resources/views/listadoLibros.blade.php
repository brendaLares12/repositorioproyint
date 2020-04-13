@include("layouts.header")
<body>
    <main style="margin-top:200px">
      <!--LISTADO DE PRODUCTOS LIBROS-->
      <!--LITERATURA UNIVERSAL-->
      <div class="listado-productos">
        <h5 class="detalle-libros"><span class="detalle-libros1">Listado de libros</span></h5>
        <br>
        <h6 class="detalle-libro" id="LiteraturaUni"><span class="detalle-libro1"><strong>Literatura Universal</strong></span></h6>
      </div>
      <br>
      <br>
      <div class="listado-productos">
        <div class="row justify-content-around">
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/mercader.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro"><strong>"El Mercader de Venecia"</strong></h4>
                <p class="precio">$300</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/mobydick.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro"><strong>"Moby Dick"</strong></h4>
                <p class="precio">$300</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/crimen.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro"><strong>"Crimen y Castigo"</strong></h4>
                <p class="precio">$500</p>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-link">Ir Arriba</a>
        </div>
        <!--LITERATURA INFANTIL/JUVENIL-->
        <br>
        <div class="listado-productos">
          <h6 class="detalle-libro" id="LiteraturaInf"><span class="detalle-libro1"><strong>Literatura Infantil/Juvenil</strong></span></h6>
        </div>
        <br>
        <br>
        <div class="row justify-content-around">
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href="detalle-producto-libro.php"><img src="storage/tomsawyer.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro"><strong>"Las Aventuras de Tom Sawyer"</strong></h4>
                <p class="precio">$300</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/alicia.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro"><strong>"Alicia en el país de las Maravillas"</strong></h4>
                <p class="precio">$500</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/verne.jpg" alt="" height="400px"><a>
                    <br>
                    <br>
                    <h4 class="titulo-libro"><strong>"20.000 leguas de viaje submarino"</strong></h4>
                    <p class="precio">$400</p>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-link">Ir Arriba</a>
        </div>
        <br>
        <!--LITERATURA UNIVERSAL-->
        <div class="listado-productos">
          <h6 class="detalle-libro" id="HistoriaUni"><span class="detalle-libro1"><strong>Historia Universal<strong></span></h6>
        </div>
        <br>
        <br>
        <div class="row justify-content-around">
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/historia1.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro"><strong>"Atlas Histórico Mundial"</strong></h4>
                <p class="precio">$1500</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/america1.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro"><strong>"Historia de América"</strong></h4>
                <p class="precio">$500</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container-cards">
              <div class="img">
                <a href=#><img src="storage/andes.jpg" alt="" height="400px"></a>
                <br>
                <br>
                <h4 class="titulo-libro" id="Utiles"><strong>"Nueva historia del Cruce de los Andes"</strong></h4>
                <p class="precio">$400</p>
              </div>
            </div>
          </div>
          <a href="#" class="btn btn-link">Ir Arriba</a>
        </div>
        </main>
        @include("layouts.footer")