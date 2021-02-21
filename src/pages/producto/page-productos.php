<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <link rel="stylesheet" href="../../../src/style/general.css">
    <link rel="stylesheet" href="../../nav/style/menu.css">
</head>
<body>
<?php 
    require_once '../../../config/conexion.php';
    require_once '../../../config/sql_class.php';

    $cat_class = new sql_class();
    $result_cat = $cat_class->ConsultarCategorias();
?>
    <?php 
       require_once '../../nav/menu.php';
    ?>

    <div id="contenedor">
    <div id="promociones">
        ola
    </div>    
    <h1>ola</h1>
        Productos
    </div>
</body>
</html>