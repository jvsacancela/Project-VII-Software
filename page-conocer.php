<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONOCENOS | IMPORTADORA MENDEZ</title>
    <link rel="stylesheet" href="src/assets/style/page-conocer.css">
    <link rel="stylesheet" href="src/assets/style/general.css">
    <link rel="stylesheet" href="src/assets/style/menu.css">
    <link rel="stylesheet" href="src/assets/style/footer.css">
</head>
<body>
<?php 
    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $cat_class = new sql_class();
    $result_cat = $cat_class->ConsultarCategorias();
?>
    <?php
    require_once 'src/include/menu.php'
    ?>
    <br>
    
    <div id="contenedor">

        <Div id="seccion"> 
            <div id="img"> 
                <img src="src/assets/img/quienes.png" alt="Quienes Somos">
           </div>
           <div id="info">
               <h1>QUIENES SOMOS  </h1>
               <p>
               Importadora Méndez es una tienda  de artículos de belleza, accesorios para mujer, juguetes y accesorios de fiesta. Cuenta con su almacén ubicado en la Av. Quito entre Cuenca y Riobamba. El negocio actualmente atiende a una amplia variedad de clientes, como profesionales de la belleza y personas que gustan mantener y cuidar su imagen. </p>
           </div>
       </div>
               
   
       <Div id="seccion"> 
           <div id="img"> 
               <img src="src/assets/img/mision.jpg" alt="Misión">
          </div>
          <div id="info">
              <h1>MISIÓN</h1>
              <p>
               Ofrecer al profesional de la belleza y consumidor final una amplia gama de productos, con servicios especializados y precios competitivos. </p>
          </div>
      </div>
                   
   
   
      <Div id="seccion"> 
       <div id="img"> 
           <img src="src/assets/img/vision.jpg" alt="Vision">
      </div>
      <div id="info">
          <h1>VISION</h1>
          <p>
           Ser la empresa líder a nivel nacional en importación, distribución, y comercialización de nuestros productos, marcando siempre la tendencia del mercado e innovando con marcas líderes dentro de la industria. </p>
      </div>
   </div>
   
   
   <Div id="seccion"> 
       <div id="img"> 
           <img src="src/assets/img/valores.jpg" alt="Valores">
      </div>
      <div id="info">
          <h1>VALORES</h1>
          <p>
           Somos una empresa comprometida con nuestros clientes adaptándose y satisfacer las necesidades, garantizando estándares de excelente calidad. Trabajamos con amor y compromiso con el país, tomando como valores fundamentales. </p>
           <div class="viñetas">
           <ul>
               <li>Honestidad </li>
               <li>Calidad</li>
               <li>Pasión </li>
               <li>Trabajo en equipo</li>
               <li>Competitividad </li>
               <li>Orientación al cliente</li>
           </ul>
       </div>
      </div>
   </div>
   
   
       
   
   
               
   
</div>
    <?php
    require_once 'src/include/footer.php'
    ?>  

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>

</body>

</html>