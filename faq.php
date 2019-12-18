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
    <link rel="icon" type="image/png" href="img/icono-pag.png" />
  </head>
  <body>
    <div class="container">
    <?php require_once 'HeadyFoot/header.php'  ?>

    <div class="contenedor-FAQ">
      <h2 class="FQtitulo">PREGUNTAS FRECUENTES</h2>

    <div class= "preguntas">
      <h6 class="pregunta"><strong>¿Cómo es la forma de pago?</strong></h6>
        <p> Se podrá pagar los pedidos con: Tarjeta de crédito, Tarjeta de débito, Transferencia Bancaria o Efectivo a través de PagoFacil o RapiPago.
      </p>
      <h6 class="pregunta"><strong>¿Cuál es el plazo de pago para efectuar la compra?</strong></h6>
      <p>Si se realizó el pago con Tarjeta de Débito o Crédito la acreditación es instantánea. En caso que el pago se realice en Efectivo (Rapipago/PagoFacil) o Transferencia, una vez realizado hay tiempo hasta 72hs hábiles para poder pagarlo. En caso de no recibir pago, la plataforma cancela automáticamente el pedido.</p>
      <h6 class="pregunta"><strong>¿Cómo se realiza el envío y cuál es el costo?</strong></h6>
      <p>El envío se realiza por OCA y el costo del envío depende del domicilio de entrega y se detalla antes de finalizar la compra. El envío gratuito es a partir de $2000.</p>
      <h6 class="pregunta"><strong>¿Cuánto tarda en llegar el pedido?</strong></h6>
      <p>Los envíos se realizan en un plazo entre 3 y 10 días hábiles dependiendo de la región.</p>
      <h6 class="pregunta"><strong>¿Qué pasa si no se retira el pedido por la Sucursal de OCA a tiempo?</strong></h6>
      <p>En caso de no retirar el pedido dentro de los 4 o 5 días hábiles desde que el pedido está disponible para su retiro en OCA, el pedido vuelve al remitente. Esto demora unos días (aproximadamente una semana), y se deberá reprogramar el envío. El costo de este envío debe ser abonado nuevamente.</p>
      <h6 class="pregunta"><strong>¿Cómo se realiza el seguimiento del pedido? </strong></h6>
      <p>En el mismo momento en que se realiza la compra, se recibe un mail de confirmación de Compra con un link donde se podrá realizar seguimiento todo el tiempo del envío. Al realizar el Pago se recibirá otro mail y otro cuando se realice el pedido.
      </p>
      <br>
      <br>
    </div>
    </div>
  
    <?php require_once 'HeadyFoot/footer.php' ?>

    </div>
  </body>
</html>
