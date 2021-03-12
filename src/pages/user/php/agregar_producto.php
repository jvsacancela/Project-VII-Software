<?php 
    require_once '../../../../config/sql_class.php';
    require_once '../../../../config/conexion.php';

    $pro_class = new sql_class();

    $pro_cod = $_POST['codigoProducto'];
    $pro_nom = $_POST['nombreProducto'];
    $pro_mar = $_POST['marcaProducto'];
    $pro_des = $_POST['descripcionProducto'];
    $pro_pre = $_POST['precioProducto'];
    $pro_can = $_POST['cantidadProducto'];
    $pro_cat = $_POST['CATEGORIA_codigoCategoria'];
    $pro_fot = $_POST['fotoProducto'];

    $result = $pro_class-> AgregarProductos($pro_cod, $pro_nom, $pro_mar, $pro_des, $pro_pre, $pro_can, $pro_cat, $pro_img);
    header ('Location: ../panel-de-control.php')

?>