<?php 
    require_once '../../../../config/sql_class.php';
    require_once '../../../../config/conexion.php';

    $cat_class = new sql_class();

    $cat_cod = $_POST['codigoCategoria'];
    $cat_nom = $_POST['nombreCategoria'];

    $result = $cat_class-> AgregarCategorias($cat_cod, $cat_nom);
    header ('Location: ../panel-de-control.php')

?>