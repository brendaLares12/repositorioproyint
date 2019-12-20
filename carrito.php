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
  <main style="margin-top:200px">
    <?php require_once 'HeadyFoot/header.php'  ?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Producto</th>
          <th scope="col">Precio Unitario</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Subtotal</th>
        </tr>
      </thead>

      <tbody>
        <!--PRIMER-PRODUCTO-->
        <tr>
          <td><img src="img/tomsawyer.jpg" alt="" height=50%>
            <p><strong><br> Libro:<br>"Las Aventuras de Tom Sayer"</strong></p>
          </td>
          <td class="precio">
            <p><strong>$300</strong></p>
          </td>
          <td>
            <label for="cantidad">
              <input type="number" name="cantidad" id="cantidad" min="1" max="9">
          </td>
          <td>
            <p><strong>$300</strong></p>
          </td>
          <th scope="row"><a href="#" title="Quitar artículos" class="far fa-trash-alt"></a></th>
        </tr>

        <!--SEGUNDO-PRODUCTO-->
        <tr>
          <th scope="row"><img src="img/faber-castell.jpg" alt="" height=30%>
            <p><br><strong>Lápices de color<br>"Faber Castell" X 24</strong></p>
          </th>
          <p></p>
          <td class="precio">
            <p><strong>$700</strong></p>
          </td>
          <td>
            <label for="cantidad">
              <input type="number" name="cantidad" id="cantidad" min="1" max="9">
          </td>
          <td>
            <p><strong>$700</strong></p>
          </td>
          <th scope="row"><a href="#" title="Quitar artículos" class="far fa-trash-alt"></a></th>
        </tr>

        <!--TERCER-PRODUCTO-->
        <tr>
          <th scope="row"><img src="img/mochilas.jpg" alt="" height=40%>
            <p><br><strong>Mochilas para niños y niñas</strong></p> <a href="listado-productos.php">◀ Seguir comprando</a>
          </th>
          <td class="precio">
            <p><strong>$2300</strong></p>
          </td>
          <td>
            <label for="cantidad">
              <input type="number" name="cantidad" id="cantidad" min="1" max="9">
          </td>
          <td>
            <p><strong>$2300</strong></p>
          </td>
          <th scope="row"><a href="#" title="Quitar artículos" class="far fa-trash-alt"></a></th>
        </tr>
      </tbody>
    </table>
    <br>
    <br>
  </main>
  <?php require_once 'HeadyFoot/footer.php' ?>
</body>

</html>