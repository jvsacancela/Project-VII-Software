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
                    <img id='foto-producto'src="https://scontent.fuio24-1.fna.fbcdn.net/v/t1.0-9/156154446_274138734060027_7165408547639738458_o.jpg?_nc_cat=104&ccb=3&_nc_sid=a26aad&_nc_ohc=oikfFtQ6ihkAX9mhKsl&_nc_ht=scontent.fuio24-1.fna&oh=1c1fad5083e4599d5c34b9a3ca481b21&oe=6064E37E" alt="Foto del Producto">
                    <h1 id="nombre-marca-producto">
                        <?php 
                            echo $display['nombreProducto'];
                            echo  " ";
                            echo $display['marcaProducto'];
                        ?>
                    </h1>
                    <p id='descripcion-producto'><?php echo $display['descripcionProducto'];  ?></p>
                    <h1 id='precio-producto'>$<?php echo $display['precioProducto'];  ?></h1>
                    <input id="btn-add-cart" type="button" value="AGREGAR AL CARRITO">
                </div>
            <?php } ?>
            

        </div>
    </div>
</body>

    <?php
        require_once 'src/include/footer.php'
    ?>
</html>