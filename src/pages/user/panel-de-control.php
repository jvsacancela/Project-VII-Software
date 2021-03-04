<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE CONTROL</title>
    <link rel="stylesheet" href="panel-de-control.css">
    <link rel="stylesheet" href="../../assets/style/panel-de-control.css">
</head>
<body>
    <div id="panel-contenedor">
        <div id="panel-datos">
        
            <h1 id="nom-user">Bienvenido <?php echo $_SESSION['nombreUsuario']; ?></h1>
            <a href="cerrar-usuario.php">Salir</a>
            <hr>
            <div>
                <input type="button" value="Consultar Categorias">
                <input type="button" value="Agregar Categoria">
            </div>
            <hr>
            <div>
                <input type="button" value="Consultar Productos">
                <input type="button" value="Agregar Productos">
            </div>
            
        </div>
        
        <div id="panel-contenido">
        
        </div>
        
    </div>
    
</body>
</html>