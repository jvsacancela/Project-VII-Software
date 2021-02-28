<?php

    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $res_class = new sql_class();
    $result_cat = $res_class->ConsultarCategorias();
    $result_pro = $res_class->ConsultarProductos();
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
                <img id='foto-producto'src="" alt="Foto del Producto">
                <h3 id='precio-producto'>$<?php echo $display['precioProducto'];  ?></h3>
                <h3 id='nombre-producto'><?php echo $display['nombreProducto'];  ?></h3>
                <p id='descipcion-producto'><?php echo $display['descripcionProducto'];  ?></p>
                <h3 id='marca-producto'><?php echo $display['marcaProducto'];  ?></h3>
            <?php } ?>
            </div>

        </div>
    </div>
</body>

    <?php
        require_once 'src/include/footer.php'
    ?>
</html>