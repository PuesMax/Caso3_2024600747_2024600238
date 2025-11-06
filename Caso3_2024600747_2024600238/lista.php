<?php
  session_start();
	include "mysqlaux.php";
	
	$datos = seleccionar(["localhost", "root", "a62926292M", "tiendita"], "SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
      body {
        background-color: #f8f9fa;
      }
    </style>  
  </head>
  <body>
    <div class="bg-primary text-white p-4 rounded mb-4">
      <h1>¡Bienvenido a tu tiendita!</h1>
      <p>Aquí podrás ver tus productos</p>
    </div>

    <table class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Descripcion</th>
			</tr>
		</thead>
		<tbody>
		  <?php foreach($datos as $dato):?>
			<tr>
				<td><?php echo $dato[0] ?></td>
				<td><?php echo $dato[1] ?></td>
				<td><?php echo $dato[2] ?></td>
				<td><?php echo $dato[3] ?></td>
			</tr>
		  <?php endforeach ?>
		</tbody>
    </table>

    <h1 class="mb-3">¿Que deseas hacer?</h1>
  <div class="row">
    <div class="col-md-4">
	    <div class="card">
          <div class="card-header bg-success text-white">
            Agregar un Producto
          </div>
          <div class="card-body">
            <form method="post">
              <label>Nombre</label>
              <input type="text" name="nombre"><br>
              <label>Precio</label>
              <input type="number" name="precio" min="1"><br>
              <label>Descripción</label>
              <input type="text" name="descripcion"><br>
              <input type="submit" class="btn btn-success" value="Agregar nuevo" formaction="nuevo.php">
            </form>
          </div>
      </div>
    </div>
  </div>

	<br><br>
  <!--Eliminar-->
  <div class="row">
    <div class="col-md-4">
	    <div class="card">
          <div class="card-header bg-danger text-white">
            Eliminar Producto
          </div>
          <div class="card-body">
            <form method="post">
              <label>Nombre</label>
              <input type="text" name="nombre"><br>
	            <input type="submit" class="btn btn-danger" value="Eliminar producto" formaction="eliminar.php">
              <!--<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-base-target="#confirmarEliminar">
              Eliminar Producto
              </button>-->
            </form>
          </div>
      </div>
    </div>
  </div>

  <br><br>
  <!--Actualizar-->
  <div class="row">
    <div class="col-md-4">
	    <div class="card">
          <div class="card-header bg-info text-white">
            Actualizar Producto
          </div>
          <div class="card-body">
            <form method="post">
              <label>Nombre del producto a actualizar</label><br>
              <input name="nombre" required><br>
              <label>Nuevo precio</label><br>
              <input type="number" min="1" name="precio" required><br>
              <label>Nueva descripción</label><br>
              <input name="descripcion" required><br><br>
              <input type="submit" class="btn btn-info" value="Actualizar producto" formaction="actualizar.php">
            </form>
          </div>
      </div>
    </div>
  </div>

	<br><br>

	<br><br>
  <!--Buscar-->
  <div class="row">
    <div class="col-md-4">
	    <div class="card">
          <div class="card-header bg-primary text-white">
            Buscar un Producto
          </div>
          <div class="card-body">
            <form method="post">
              <label>Nombre</label>
              <input type="text" name="nombre"><br>
              <input type="submit" class="btn btn-primary" value="buscar producto" formaction="consultar.php">
            </form>
          </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand">Mi Tiendita</span>
        <form method="POST" action="logout.php">
           <button type="submit" name="cerrar" class="btn btn-light">Cerrar Sesión</button>
        </form>

	      <br><br><br>
    </div>
  </nav>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
