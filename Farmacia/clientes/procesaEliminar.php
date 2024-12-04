 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- referencia a bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
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
      padding: 20px 0;
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
    <a class="navbar-brand" href="./clientes.html">  Farmacias Mojarrás</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./clientes.html">Regresar</a>
        </li>
      </ul>
    </div>
  </nav>





    <div class="container text-light bg-dark text-center">
        
    <h1>
    <?php 
    $conn = new mysqli("localhost", "root", "", "far_moj");
    $id = $_POST['id'];
    $nom = $_POST['nombre'];

    // INSERTAR DATO
    $sql = "DELETE FROM clientes WHERE `clientes`.`idCliente`=$id";
    if ($conn->query($sql) == TRUE )
    {
      echo "<br>Cambio exitoso";
    }

    mysqli_close($conn);


    ?></p>
    </h1>    

    </div>
    <!-- implementacion de las librerias dentro de body-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>