<?php
    session_start();
    include_once '../../../../config/conexion.php';
    include_once '../../../../config/sql_class.php';

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
            #$foto = "";
            $result = $cart_class-> ConsultarIdProducto($id);
            $fila = mysqli_fetch_row($result);
            $nombre = $fila[1];
            $precio = $fila[3];
            #$foto = $fila[7];

            $newArreglo = array(
                'Codigo' => $id,
                'Nombre' => $nombre,
                'Precio' => $precio,
                'Cantidad' => 1
            );
            array_push($arreglo, $newArreglo);
            $_SESSION['car'] = $arreglo;
        }
    }else{
        if(isset($_GET['id'])){
            $nombre = "";
            $precio = "";
            #$foto = "";
            $result = $cart_class-> ConsultarIdProducto($id);
            $fila = mysqli_fetch_row($result);
            $nombre = $fila[1];
            $precio = $fila[3];
            #$foto = $fila[7];

            $arreglo[] = array(
                'Codigo' => $id,
                'Nombre' => $nombre,
                'Precio' => $precio,
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