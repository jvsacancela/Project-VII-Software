<?php

    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $cat_class = new sql_class();
    $result_cat = $cat_class->ConsultarCategorias();
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
            <?php while($display = $result_cat->fetch_assoc()){?>
                <h3><?php echo $display['nombreCategoria'];  ?></h3>
            <?php } ?>

        </div>
    </div>
</body>

    <?php
        require_once 'src/include/footer.php'
    ?>
</html>