<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPORTADORA MENDEZ | IMPORTADORES POR EXCELENCIA</title>
    <!--estilos-->
    <link rel="stylesheet" href="src/assets/style/general.css">
    <link rel="stylesheet" href="src/assets/style/menu.css">
    <link rel="stylesheet" href="src/assets/style/footer.css">
    <link rel="stylesheet" href="sr/assets/style/index.css">
    <!--Libreria para carrucel-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> 
    
</head>
<body>
<?php 
    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $cat_class = new sql_class();
    $result_cat = $cat_class->ConsultarCategorias();
?>
    <!--navegacion-->
    <?php
    require_once 'src/include/menu.php'
    ?>
     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="src/assets/img/carrucel/1.png" Height="600px" class="d-block w-100" alt="inicio">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/2.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/4.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/5.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>
      
      <div class="carousel-item">
        <img src="src/assets/img/carrucel/6.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/3.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/7.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/8.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/9.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="src/assets/img/carrucel/10.jpg" Height="600px" class="d-block w-100" alt="...">
      </div>
      
    </div>
    <br>
    
    <div id="contenedor">
    
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  <!--</div>
        <div id="promociones">
            <h1>PROMOCIONES</h1>
        </div>
    </div>
-->
    <br>
    <!--footer-->
   
</body>
    <?php
    require_once 'src/include/footer.php'
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
</html>