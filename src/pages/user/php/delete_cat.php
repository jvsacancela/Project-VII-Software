<?php 
require_once '../../../../config/conexion.php';
require_once '../../../../config/sql_class.php';

$delete_class = new sql_class();

$id = $_GET['id'];

$result = $delete_class-> EliminarCategoria($id);

header('Location: ../panel-de-control.php')

?>