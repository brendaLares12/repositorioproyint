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

      <div class="contenedor-contacto">
          <div class="contenedor-form">
            <h2>Contacto</h2>
          <form class="formulario" action="contacto.php" method="post" onsubmit="return validar();">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required value>
            <label for="">Correo</label>
            <input type="email" name="correo" id="correo" placeholder="Correo" required value>
            <label for="">Telefono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Telefono o celular" required value>
            <label for="">Asunto</label>
            <input type="text" name="asunto" id="asunto" placeholder="Asunto del mensaje">
            <label for="">Mensaje</label>
            <textarea type="mensaje" id="mensaje" placeholder="Escriba su mensaje" required></textarea>
            <button class="boton-enviar" type="submit" value="Enviar" name="submit">Enviar</button>
          </form>
        </div>
      </div>
      <?php require_once 'HeadyFoot/footer.php' ?>

    </div>
  </body>
</html>
