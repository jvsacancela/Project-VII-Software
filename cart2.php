<?php
    session_start();
    $arreglo = $_SESSION['car'];
    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $cart_class = new sql_class();


  # header ('Location: page-productos.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS PRODUCTOS | IMPORTADORA MENDEZ</title>
    <link rel="stylesheet" href="src/assets/style/general.css">
    <link rel="stylesheet" href="src/assets/style/cart.css">
    <link rel="stylesheet" href="src/assets/style/footer.css">
    <link rel="stylesheet" href="src/assets/style/menu.css">
    <!--LIBRERIA PARA ICONOS-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <?php 
        $result_cat = $cart_class->ConsultarCategorias();
        require_once 'src/include/menu.php'
    ?>

    <div id="content">
    <h1>Mis productos</h1>

<table>
    <thead>
       <!-- <th>FOTO</th>-->
        <th>PRODUCTO</th>
        <th>PRECIO</th>
        <th>CANTIDAD</th>
        <th>PRECIO UNITARIO</th>
        
    </thead>
    <tbody>

    <?php 
    $preciott = 0;
    if(isset($_SESSION['car'])){
            $arregloCart = $_SESSION['car'];
            for($i=0; $i<count($arregloCart);$i++){
                
    $preciott = $preciott + ($arregloCart[$i]['Precio'] * $arregloCart[$i]['Cantidad']);

    ?>
        <tr>
           <!-- <td><img id="img-tab" src="src/assets/img/catalogo/<?php  echo $arregloCart[$i]['Foto'] ?>" alt="foto producto"></td>-->
            <td> <?php echo $arregloCart[$i]['Nombre']; ?> </td>
            <td> $ <?php echo number_format($arregloCart[$i]['Precio'], 2 , '.', ''); ?></td>     
            <td>
                <!--<button>&minus;</button>--> 
                <input id="txtCant" type="text" value="<?php echo $arregloCart[$i]['Cantidad']; ?>" class="txtCantidad" data-precio="<?php echo $arregloCart[$i]['Precio'];?>" data-id="<?php echo $arregloCart[$i]['Codigo']; ?>">
               <!-- <button>&plus;</button>-->
            </td>
            <td class="cant<?php echo $arregloCart[$i]['Codigo'];?>"> 
                $ <?php echo number_format($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'], 2, '.', '')?></td>

            <td><a href="#" class="btnEliminar" data-ide="<?php echo $arregloCart[$i]['Codigo'];?> ">-</a></td>
        </tr>
    <?php } } ?>
    </tbody>

   
</table>

<a href="page-compra.php" id='btn-comprar'>COMPRAR</a>
    
    </div>


    <?php 
        require_once 'src/include/footer.php'
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".btnEliminar").click(function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                var boton = $(this);
                $.ajax({
                    method: 'POST',
                    url: 'src/pages/user/php/delete_cart.php',
                    data:{
                        id:id
                    }
                }).done(function(respuesta) {
                    boton.parent('td').parent('tr').remove();
                    alert(respuesta)
                });
            }); 
        });
    </script>
</body>

</html>