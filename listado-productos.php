<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lobster|Muli&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/6ac70a7b0a.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Literata:400,700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Libreria Lablic</title>
  <link rel="icon" type="image/png" href="img/icono-pag.png">
</head>

<body>
  <main style="margin-top:200px">
    <?php require_once 'HeadyFoot/header.php'  ?>
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
              <a href=#><img src="img/mercader.jpg" alt="" height="400px"></a>
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
              <a href=#><img src="img/mobydick.jpg" alt="" height="400px"></a>
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
              <a href=#><img src="img/crimen.jpg" alt="" height="400px"></a>
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
              <a href="detalle-producto-libro.php"><img src="img/tomsawyer.jpg" alt="" height="400px"></a>
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
              <a href=#><img src="img/alicia.jpg" alt="" height="400px"></a>
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
              <a href=#><img src="img/verne.jpg" alt="" height="400px"><a>
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
              <a href=#><img src="img/historia1.jpg" alt="" height="400px"></a>
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
              <a href=#><img src="img/america1.jpg" alt="" height="400px"></a>
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
              <a href=#><img src="img/andes.jpg" alt="" height="400px"></a>
              <br>
              <br>
              <h4 class="titulo-libro" id="Utiles"><strong>"Nueva historia del Cruce de los Andes"</strong></h4>
              <p class="precio">$400</p>
            </div>
          </div>
        </div>
        <a href="#" class="btn btn-link">Ir Arriba</a>
      </div>
      <!-- FIN LISTADO DE PRODUCTOS LIBROS-->
      <!--LISTADO DE PRODUCTOS PAPELERÍA-->
      <!--ÚTILES ESCOLARES-->
      <br>
      <div class="listado-productos">
        <h5 class="detalle-libros"><span class="detalle-libros1">Listado de productos de papelería</span></h5>
        <br>
        <h6 class="detalle-libro"><span class="detalle-libro1"><strong>Útiles escolares</strong></span></h6>
      </div>
      <br>
      <br>
      <div class="row justify-content-around">
        <div class="col-md-4">
          <div class="container-cards">
            <div class="img">
              <a href="carrito.php"><img src="img/mochilas.jpg" alt="" height="300px"></a>
              <br>
              <br>
              <h4 class="titulo-mochila"><strong>Mochilas para niños y niñas</strong></h4>
              <p class="precio">$2300</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-cards">
            <div class="img">
              <a href=#><img src="img/cuadernos.jpg" alt="" height="300px"></a>
              <br>
              <br>
              <h4 class="titulo-cuadernos"><strong>Cuadernos "Éxito"</strong></h4>
              <p class="precio">$150</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-cards">
            <div class="img">
              <a href="detalle-producto-libro.php"><img src="img/faber-castell.jpg" alt="" height="300px"></a>
              <br>
              <br>
              <h4 class="titulo-lapices" id="LibyAg"><strong>Lápices de colores "Faber-Castell"</strong></h4>
              <p class="precio">$700</p>
            </div>
          </div>
        </div>
        <a href="#" class="btn btn-link">Ir Arriba</a>
      </div>
      <!--LIBRETAS Y AGENDAS-->
      <br>
      <div class="listado-productos">
        <h6 class="detalle-libro"><span class="detalle-libro1"><strong>Libretas y agendas</strong></span></h6>
      </div>
      <br>
      <br>
      <div class="row justify-content-around">
        <div class="col-md-4">
          <div class="container-cards">
            <div class="img">
              <a href=#><img src="img/libretas-1.jpg" alt="" width="500px" height="300px"></a>
              <br>
              <br>
              <h4 class="titulo-mochila"><strong>Libretas</strong></h4>
              <p class="precio">$500</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-cards">
            <div class="img">
              <a href=#><img src="img/agendas.jpg" alt="" height="300px"></a>
              <br>
              <br>
              <h4 class="titulo-lapices"><strong>Agendas</strong></h4>
              <p class="precio">$700</p>
            </div>
          </div>
          <a href="#" class="btn btn-link">Ir Arriba</a>
        </div>
      </div>
      <!--TARJETAS Y BOLSAS KRAFT-->
      <br>
      <div class="listado-productos">
        <h6 class="detalle-libro" id="Tarj-Kraft"><span class="detalle-libro1"><strong>Tarjetas y Bolsas kraft</strong></span></h6>
      </div>
      <br>
      <br>
      <div class="row justify-content-around">
        <div class="col-md-4">
          <div class="container-cards">
            <div class="img">
              <a href="#"><img src="img/tarjetas-1.jpg" alt="" width="500px" height="500px"></a>
              <br>
              <br>
              <h4 class="titulo-mochila"><strong>Tarjetas</strong></h4>
              <p class="precio">$150</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container-cards">
            <div class="img">
              <a href=#><img src="img/bolsas-kraft.jpg" alt="" width="400px" height="500px"></a>
              <br>
              <br>
              <h4 class="titulo-lapices"><strong>Bolsas kraft</strong></h4>
              <p class="precio">$200</p>
            </div>
          </div>
          <a href="#" class="btn btn-link">Ir Arriba</a>
        </div>
      </div>
    </div>
  </main>
    <?php require_once 'HeadyFoot/footer.php' ?>

</body>

</html>