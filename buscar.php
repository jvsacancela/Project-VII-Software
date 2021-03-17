<?php

    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    
    $res_class = new sql_class();
    $result_cat = $res_class->ConsultarCategorias();
    $result_pro = $res_class->ConsultarProductos();

    $resultado_fot = $res_class->ConsultarProductos();

    $txt = $_GET['texto'];

    if(!isset($txt)){
        header('Location: page-productos.php');
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
        <h4 id="titul"><i class="far fa-caret-square-right"></i> Resultados de <?php echo $txt ?></h4>
        <div id="productos">
            <?php 

            $resul = $res_class->BuscarProductos($txt, $txt, $txt);
            if (mysqli_num_rows($resul)){
            while($display = $resul->fetch_assoc()){?>
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
                   <!-- <input id="btn-add-cart" type="button" value="AGREGAR AL CARRITO">-->
                   <button id="btn-add-cart" ><a  id="btn-add-cart" href="cart.php?id=<?php echo $display['codigoProducto']?>">AGREGAR AL CARRITO</a></button>
                </div>
            <?php 
            } } else {
                echo '<h2>Sin resultados </h2>';
            }
            ?>
            

        </div>
    </div>

    
</body>

    <?php
        require_once 'src/include/footer.php'
    ?>
</html>