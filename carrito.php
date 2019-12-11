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
    
		<div class="row carritodecompras">	
			<?php
				$total=0;
				if(isset($_SESSION['carrito'])){
					$datos=$_SESSION['carrito'];
					$total=0;
					for($i=0;$i<count($datos);$i++){
			?>
					<div class="compra">

						<img src="../img/Muestras/<?php echo $datos[$i]['imagen'];?>" width="350" height="350"><br>
						<span><?php echo $datos[$i]['nombre']?></span><br>
						<span>Precio unitario: <?php echo $datos[$i]['precio']?></span><br>
						<span>Cantidad 
							<input type="text" value="<?php echo $datos[$i]['cantidad'];?>"
							data-precio="<?php echo $datos[$i]['precio'];?>"
							data-id="<?php echo $datos[$i]['id'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal: <?php $sub = $datos[$i]['precio']*$datos[$i]['cantidad']; echo $sub ?> </span>

					</div>
				<?php
					$total=$sub+$total;
					}
				}else{
					echo '<h2>El carrito de compras está vacío</h2>';
				}
				echo '<h2 id="total">Total: '.$total.'</h2>';
				if($total!=0){
					echo'<a href="compras/compras.php">Finalizar compra</a>';
				}
				
			?>
			<br>
			<a href="../index.php">Seguir comprando</a>
	

						<img src="../img/Muestras/<?php echo $datos[$i]['imagen'];?>" width="350" height="350"><br>
						<span><?php echo $datos[$i]['nombre']?></span><br>
						<span>Precio unitario: <?php echo $datos[$i]['precio']?></span><br>
						<span>Cantidad 
							<input type="text" value="<?php echo $datos[$i]['cantidad'];?>"
							data-precio="<?php echo $datos[$i]['precio'];?>"
							data-id="<?php echo $datos[$i]['id'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal: <?php $sub = $datos[$i]['precio']*$datos[$i]['cantidad']; echo $sub ?> </span>

					</div>
				<?php
					$total=$sub+$total;
					}
				}else{
					echo '<h2>El carrito de compras está vacío</h2>';
				}
				echo '<h2 id="total">Total: '.$total.'</h2>';
				if($total!=0){
					echo'<a href="compras/compras.php">Finalizar compra</a>';
				}
				
			?>
			<br>
			<a href="../index.php">Seguir comprando</a>
			
			<?php require_once 'HeadyFoot/footer.php' ?>
    	</div>
	</body>
</html>
