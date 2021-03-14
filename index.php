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
    <br>

    <div id="contenedor">

        <div id="promociones">
            <h1>PROMOCIONES</h1>
        </div>
    </div>
    
    <br>
    <!--footer-->
    <?php
    require_once 'src/include/footer.php'
    ?>
</body>
</html>