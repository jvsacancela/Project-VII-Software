<?php
    session_start();
    require_once 'config/conexion.php';
    require_once 'config/sql_class.php';

    $cart_class = new sql_class();
   $id = $_GET['id'];

   

    if (isset($_SESSION['car'])){
        $arreglo = $_SESSION['car'];
        $find=false;
        $num = 0;
        for($i=0; $i<count($arreglo); $i++){
            if($arreglo[$i]['Codigo'] == $id){
                $find = true;
                $num = $i;
            }
        }
        if($find == true){
            $arreglo[$num]['Cantidad']=$arreglo[$num]['Cantidad']+1;
            $_SESSION['car']=$arreglo;
        }else{
            $nombre = "";
            $precio = "";
            $foto = "";
            $result = $cart_class-> ConsultarIdProducto($id);
            $fila = mysqli_fetch_row($result);
            $nombre = $fila[1];
            $precio = $fila[3];
            $foto = $fila[7];

            $newArreglo = array(
                'Codigo' => $id,
                'Nombre' => $nombre,
                'Precio' => $precio,
                'Foto' => $foto,
                'Cantidad' => 1
            );
            array_push($arreglo, $newArreglo);
            $_SESSION['car'] = $arreglo;
        }
    }else{
        if(isset($_GET['id'])){
            $nombre = "";
            $precio = "";
            $foto = "";
            $result = $cart_class-> ConsultarIdProducto($id);
            $fila = mysqli_fetch_row($result);
            $nombre = $fila[1];
            $precio = $fila[3];
            $foto = $fila[7];

            $arreglo[] = array(
                'Codigo' => $id,
                'Nombre' => $nombre,
                'Precio' => $precio,
                'Foto' => $foto,
                'Cantidad' => 1
            );
            $_SESSION['car'] = $arreglo;
        }
    }

   //header ("Location: ../../../../page-productos.php")

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
        <th>FOTO</th>
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
            <td><img id="img-tab" src="src/assets/img/catalogo/<?php  echo $arregloCart[$i]['Foto'] ?>" alt="foto producto"></td>
            <td> <?php echo $arregloCart[$i]['Nombre']; ?> </td>
            <td> $ <?php echo number_format($arregloCart[$i]['Precio'], 2 , '.', ''); ?></td>     
            <td>
                <button>&minus;</button> 
                <input id="txtCant" type="text" value="<?php echo $arregloCart[$i]['Cantidad']; ?>" class="txtCantidad" data-precio="<?php echo $arregloCart[$i]['Precio'];?>" data-id="<?php echo $arregloCart[$i]['Codigo']; ?>">
                <button>&plus;</button>
            </td>
            <td class="cant<?php echo $arregloCart[$i]['Codigo'];?>"> 
                $ <?php echo number_format($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'], 2, '.', '')?></td>
            <td><a href="#" id="delete" data-id="<?php echo $arregloCart[$i]['Codigo'];?> "><i class="far fa-minus-square" ></i></a></td>
        </tr>
    <?php } } ?>
    </tbody>

    <tfoot>
        <tr>
        
            <th></th>
            <th></th>
            <th>TOTAL A PAGAR</th>
            <th>$<?php echo number_format($preciott, 2, '.', '') ?></th>
        </tr>
    </tfoot>
</table>

<a href="page-compra.php" id='btn-comprar'>COMPRAR</a>
    
    </div>


    <?php 
        require_once 'src/include/footer.php'
    ?>
</body>
<script src="src/pages/user/js/cart.js"></script>
</html>