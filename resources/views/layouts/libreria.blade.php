<!-- <div class="container"> --> 
      @include("layouts.header")

    <main style="margin-top:200px" >
        <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/librosclasicos.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/mago-de-oz.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/el-pricipito.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="img/rayuela2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/peter-pan.jpg" class="d-block w-100" alt="...">
                  </div>
                <div class="carousel-item">
                    <img src="img/orgullo-y-prejuicio.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                      <img src="img/el-quijote.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/garcia-marquez.jpg" class="d-block w-100" alt="...">
                      </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>

<section>
  <h2>Libros</h2>
        <div class="card-deck">
          <div class="card">
            <img src="img/clasicos.jpg" class="card-img-top" alt="..." height="220px">
          <div class="card-body">
          <h5 class="card-title">Literatura Universal</h5>
          <p class="card-text">Encontrarás las obras más destacadas de la literatura universal.</p>
          <div class = "button-link"><a href="listado-productos.php#LiteraturaUni" class="btn btn-primary">Ver productos</a></div>
          </div>
        </div>
        <div class="card">
          <img src="img/clasicosjuveniles.jpg" class="card-img-top" alt="..." height="220px">
          <div class="card-body">
          <h5 class="card-title">Literatura Infantil/Juvenil</h5>
          <p class="card-text">En nuestro sitio encontrarás libros para chicos de todas las edades.</p>
          <div class = "button-link_2"><a href="listado-productos.php#LiteraturaInf" class="btn btn-primary">Ver productos</a></div>
        </div>
        </div>
        <div class="card">
          <img src="img/historia2.jpg" class="card-img-top" alt="..." height="220px">
          <div class="card-body">
          <h5 class="card-title">Historia Universal</h5>
          <p class="card-text"> Encontrarás la recopilación de los hechos de mayor importancia que ha atravesado el hombre desde sus orígenes hasta la actualidad.</p>
          <div class = "button-link"><a href="listado-productos.php#HistoriaUni" class="btn btn-primary">Ver productos</a></div>
        </div>
        </div>
      </div>
      </section>
      <section>
          <br>
        <h2>Papelería</h2>
              <div class="card-deck">
                <div class="card">
                  <img src="img/utiles-escolares.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Útiles Escolares</h5>
                <p class="card-text">Tenemos todo lo necesario para el comienzo de clases.</p>
                <div class = "button-link"><a href="listado-productos.php#Utiles" class="btn btn-primary">Ver productos</a></div>
                </div>
              </div>
              <div class="card">
                <img src="img/libretas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Libretas y Agendas</h5>
                <p class="card-text">Todo tipo de libretas y agendas para tu escritorio u oficina.</p>
                <div class = "button-link"><a href="listado-productos.php#LibyAg" class="btn btn-primary">Ver productos</a></div>
              </div>
              </div>
              <div class="card">
                <img src="img/tarjetas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Tarjetas y Bolsas kraft</h5>
                <p class="card-text">Tarjetas y bolsas  para personalizar tus regalos</p>
                <div class = "button-link"><a href="listado-productos.php#Tarj-Kraft" class="btn btn-primary">Ver productos</a></div>
              </div>
              </div>
            </div>
            </section>
    </main>
    @include("layouts.footer")