<?php 
     require_once '../../../../config/sql_class.php';
    require_once '../../../../config/conexion.php';

    $img_class = new sql_class();

    
    $resultado_fot = $img_class->ConsultarProductos();

   
    while($display = $resultado_fot->fetch_array()){

        header("Content-type: image/jpg"); 
        echo $display['fotoProducto'];  
        
    }

    
?>
