<?php 

    session_start();
    $arreglo = $_SESSION['car'];
    for($i=0; $i<count($arreglo);$i++){
        if($arreglo[$i]['Codigo'] != $_POST['id']){
            $arregloNuevo[] = array(
                'Codigo' => $arreglo[$i]['Codigo'],
                'Nombre' => $arreglo[$i]['Nombre'],
                'Precio' => $arreglo[$i]['Precio'],
                'Cantidad' => $arreglo[$i]['Cantidad']

            );
        }
    }
    if(isset($arregloNuevo)){
        $_SESSION['car'] = $arregloNuevo;
    }else{
        unset($_SESSION['car']);
    }
    echo "listo";
?>