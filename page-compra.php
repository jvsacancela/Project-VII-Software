<?php
session_start();
require_once 'config/conexion.php';
require_once 'config/sql_class.php';

$cart_class = new sql_class();

if(!isset($_SESSION['car'])){
    header ('Location: index.php');
}
$arreglo = $_SESSION['car'];
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
        <div id="content-facturacion">
            <h1>Detalle de facturacion</h1>
            <div id="caja-form">
            <form action="">

                <div id="cajaText">
                    <label for="">Nombres:</label>
                    <input type="text" name="nombre">
                </div>

                <div id="cajaText">
                    <label for="">Ciudad:</label>
                    <input type="text" name="ciudad">
                </div>

                <div id="cajaText">
                    <label for="">Direccion:</label>
                    <input type="text" name="direccion">
                </div>

                <div id="cajaText">
                    <label for="">Correo:</label>
                    <input type="text" name="correo">
                </div>

                <div id="cajaText">
                    <label for="">Telefono:</label>
                    <input type="text" name="telefono">
                </div>

                <div id="cajaText">
                    <label for="">Constrasena:</label>
                    <input type="password" name="contrasena" >
                </div>

            </form>
            </div>
            
        </div>

        <div id="content-orden">
            <h1>Tu orden</h1>

            <table>
                <thead>
                    <th>DETALLE</th>
                    <th>PRECIO</th>
                </thead>
                <?php 
                $preciott = 0;
                for($i=0; $i<count($arreglo);$i++){
                    $preciott = $preciott + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
                ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $arreglo[$i]['Cantidad']; ?> | <?php echo $arreglo[$i]['Nombre']; ?>
                        </td>
                        <td>$ <?php echo number_format($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'], 2, '.', '')?></td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
                <tfoot>
                    <tr>
                        <th>Valor total</th>
                        <th>$ <?php echo number_format($preciott, 2, '.','') ?></th>
                    </tr>
                </tfoot>
            </table>
            <a id= "btn-comprar" href="page-entrega.php?id=1">REALIZAR PEDIDO</a>          
        </div>
    </div>
    
    <?php 
     require_once 'src/include/footer.php'
    ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
</body>
</html>