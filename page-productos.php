<?php

    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $res_class = new sql_class();
    $result_cat = $res_class->ConsultarCategorias();
    $result_pro = $res_class->ConsultarProductos();

    $resultado_fot = $res_class->ConsultarProductos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
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
    
        <div id="productos">
            <?php while($display = $result_pro->fetch_assoc()){?>
                <div id="tarjeta-producto">
                   <!--<img  id = "foto-producto" src="src/pages/user/php/view_img.php" alt="">-->
                   <img  id = "foto-producto" src="src/pages/user/php/view_img.php?id=<?php echo $display['codigoProducto']?>?" alt="">
                  
                    <h1 id="nombre-marca-producto">
                        <?php
                        echo $display['codigoProducto'];
                            echo $display['nombreProducto'];
                            echo  " ";
                            echo $display['marcaProducto'];
                        ?>
                    </h1>
                    <p id='descripcion-producto'><?php echo $display['descripcionProducto'];  ?></p>
                    <h1 id='precio-producto'>$<?php echo $display['precioProducto'];  ?></h1>
                   <!-- <input id="btn-add-cart" type="button" value="AGREGAR AL CARRITO">-->
                   <button id="btn-add-cart" ><a  id="btn-add-cart" href="src/pages/user/php/cart.php?id=<?php echo $display['codigoProducto']?>">AGREGAR AL CARRITO</a></button>
                </div>
            <?php } ?>
            

        </div>
    </div>

    
</body>

    <?php
        require_once 'src/include/footer.php'
    ?>
</html>