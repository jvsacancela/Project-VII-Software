<?php 

    session_start();
    $arreglo = $_SESSION['car'];
    for(=0; <count($arreglo);$i++){
        if($arreglo[$i]['Codigo'] != $_POST['Codigo']){
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
    echo json_encode("listo");
?>