<?php
    session_start();
    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $res_class = new sql_class();
   
    $result_pro = $res_class->ConsultarProductos();
    $resultado_fot = $res_class->ConsultarProductos();
    $result_cat = $res_class->ConsultarCategorias();

    $cat_id = $_GET['id'];

    if(!isset($cat_id)){
        header('Location: index.php');
    }

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS | IMPORTADORA MENDEZ</title>
    <link rel="stylesheet" href="src/assets/style/general.css">
    <link rel="stylesheet" href="src/assets/style/menu.css">
    <link rel="stylesheet" href="src/assets/style/page-productos.css">
    <link rel="stylesheet" href="src/assets/style/footer.css">
    
</head>
<body>

    <?php 
       require_once 'src/include/menu.php';
    ?>

    <div id="contenedor">

        <br>

        <h4 id="titul"><i class="far fa-caret-square-right"></i> Categoria | <?php echo $cat_id ?></h4>

        <div id="productos">
            <?php 

            $resull = $res_class->ConsultarCategotiaProducto($cat_id);
            if (mysqli_num_rows($resull)){
                while($display = $resull->fetch_assoc()){?>
                <div id="tarjeta-producto">
                   <!--<img  id = "foto-producto" src="src/pages/user/php/view_img.php" alt="">-->
                  <img id="foto-producto" src="src/assets/img/catalogo/<?php echo $display['fotoProducto']; ?>" alt="">
                  
                    <h1 id="nombre-marca-producto">
                        <?php
                            echo $display['nombreProducto'];
                            echo  " ";
                            echo $display['marcaProducto'];
                        ?>
                    </h1>
                    <p id='descripcion-producto'><?php echo $display['descripcionProducto'];  ?></p>
                    <h1 id='precio-producto'>$<?php echo number_format($display['precioProducto'], 2, '.', '');  ?></h1>
                   <button class="btn-add-cart" id="btn-add-cart" ><a class="btn-add-cart" id="btn-add-cart" href="cart.php?id=<?php echo $display['codigoProducto']?>">AGREGAR AL CARRITO</a></button>
                </div>
            <?php 
                }}else {
                    echo '<h2>Sin resultados </h2>';
                }
             ?>
            

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
</body>


    <script src="src/pages/user/js/page-productos.js"></script>
    <?php
        require_once 'src/include/footer.php'
    ?>
    </html>