
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tortugas Marinas</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    table, th, td {
  border:1px solid black;
  width:75%;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
    }
    body {
      background-color: #f8f9fa;
      padding-top: 40px;
    }

    .navbar {
      background-color: #142c41;
    }

    .jumbotron, .welcome-section {
      background-color: black;
      background-image: url('bienvenida.jpg'); 
      background-size: cover;
      background-position: center;
      color: #fff;

      text-align: center;
      padding: 150px 0;
      margin-bottom: 10;
      opacity: 1;
    }

    .jumbotron h1, .welcome-section h1 {
      font-size: 3rem;
      font-weight: bold; 
      text-shadow: 0.1em 0.1em 0.2em black;

    .jumbotron p,.welcome-section p,.section h2,.card-title {
      margin-bottom: 10px;
      font-weight: bold;
    }
  }

    .lead{
    color: white; text-shadow: black 0.1em 0.1em 0.2em;
  }

    .section {
      padding: 50px 10;
    }

    .section h2 {
      margin-bottom: 10px;
    }

    .card {
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .register-section {
      background-color: #72a9ad;
      color: #fff;
      text-align: center;
      padding: 60px 0;
    }

    .nameL{
      text-indent: 2em;
    }
  </style>
</head>
<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="logo">
      <!-- Logo Placeholder for Illustration -->
      <img width="50px" height="auto" src="capsulas.png">
    </div class="nameL">
    <a class="navbar-brand" href="./venta.html">  Farmacias Mojarrás</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./venta.html">Regresar</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sección de bienvenida -->
  <div class="welcome-section"  data-toggle="animation" data-animation-start="onScroll" data-animation="fade-in">

  </div>
  <br>
  <br>

  <!-- Insertar Medicamentos -->
  

  <?php
    $conn = new mysqli("localhost", "root", "", "far_moj");
    $sql = "SELECT * FROM venta";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows){
      echo"<table>
  <tr>
    <th><h2>ID Venta</h2></th>
    <th><h2 class='text-center'>Medicamento</h2></th>
    <th><h2 class='text-center'>Cliente</h2></th>
    <th><h2 class='text-center'>Cantidad</h2></th>
    <th><h2 class='text-center'>Total</h2></th>
  </tr>";
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['idVenta'];
      $med = $row['medicamento'];
      $cli = $row['cliente'];
      $cantidad = $row['cantidad'];
      $total = $row['total'];
      echo"
      <tr>
      <td>$id</td>
      <td>$med</td>
      <td>$cli</td>
      <td>$cantidad</td>
      <td>$total</td>
      <td><a href='eliminarVen.php?id=$id'> <img width='50px' height='auto' src='borrador.png'></img></a></td>
      </tr>
      ";

    }
    echo"</table>";

  }else{
    echo "<div class='container text-light bg-dark text-center'> <br><p>No hay ventas registradas.</p> <br></div>";
    }
  ?>
  
  <p></p>
  
  
    

  </div>
  </div>

  </div>


  <!-- Enlaces a los scripts de Bootstrap y jQuery (opcional) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
