<?php
session_start();
require_once 'config/conexion.php';
require_once 'config/sql_class.php';

$cart_class = new sql_class();

$id = $_GET['id'];
if(!isset($_SESSION['car'])){
    header ('Location: index.php');
}
$arreglo = $_SESSION['car'];
$total = 0;
for($i=0; $i<count($arreglo); $i++){
$total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
}

$contrasena="";
if(isset($_POST['contrasena'])){
    if($_POST['contrasena']!=""){

    }
}




$fecha = date('Y-m-d h:m:s');
$consulta_venta = $cart_class-> InsertarVenta(1,$id,  $total, $fecha);

$id_venta = 1;

for($i=0; $i<count($arreglo); $i++){
    $cant = $arreglo[$i]['Cantidad'];
    /*$id_pro $arreglo[$i]['Id'];*/
    $pre = $arreglo[$i]['Precio'];
    $subtt = $arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'];
    $consulta_pro_ven = $cart_class-> InsertarProductosVenta($id_venta, $id, $cant, $pre, $subtt);   
}
unset($_SESSION['car']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRAR | IMPORTADORA MENDEZ</title>
    <link rel="stylesheet" href="src/assets/style/general.css">
    <link rel="stylesheet" href="src/assets/style/page-compra.css">
    <link rel="stylesheet" href="src/assets/style/footer.css">
    <link rel="stylesheet" href="src/assets/style/menu.css">
</head>
<body>
    <?php 
        $result_cat = $cart_class->ConsultarCategorias();
        require_once 'src/include/menu.php'
    ?>
    <div id="content">
    <div id="contenido">
        <h1>GRACIAS</h1>
    </div>
    </div>
    <?php 
     require_once 'src/include/footer.php'
    ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>

</body>
</html>