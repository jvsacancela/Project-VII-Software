<?php 
include_once 'user/php/cart.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIS PRODUCTOS</title>
    <link rel="stylesheet" href="../../../assets/style/general.css">
</head>
<body>
    <h1>Mis productos</h1>

    <table>
        <thead>
            <th>PRODUCTO</th>
            <th>PRECIO</th>
            <th>FOTO</th>
            <th>CANTIDAD</th>
            <th>P UNIT</th>
        </thead>
        <tbody>
        <?php if(isset($_SESSION['car'])){
                $arregloCart = $_SESSION['car'];
                for($i=0; $i<count($arregloCart);$i++){    
        ?>
            <tr>
                <td> <?php echo $arregloCart[$i]['Nombre']; ?> </td>
                <td> $ <?php echo $arregloCart[$i]['Precio']; ?></td>
                <td> <?php echo 'foto.jpg'; ?></td>
                <td> <?php echo $arregloCart[$i]['Cantidad']; ?></td>
                <td> $ <?php echo $arregloCart[$i]['Precio'] * $arregloCart[$i]['Cantidad']?></td>
            </tr>
        <?php } } ?>
        </tbody>
    </table>
</body>
</html>