<?php 
    session_start();
    require_once '../../../config/conexion.php';
    require_once '../../../config/sql_class.php';
    $claveLogin = new sql_class();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESION DE USUARIOS</title>
</head>
<body>

    <form action="" method="POST">
        <div id="bordeLogin">
            <div id="cajaText">
                <label for="txt-usuario">Usuario</label>
                <input type="text" name="inputUser" autocomplete="off">
            </div>

            <div id="cajaText">
                <label for="txt-contrasena">Contraseña</label>
                <input type="password" name="inputPass" autocomplete="off">
            </div>
        </div>

        <button type="submit">Ingresar</button>
    </form>
    
</body>
</html>

<?php
    if($_POST){
        $user = $_POST['inputUser'];
        $contrasena = $_POST['inputPass'];
        $resultadoLogin = $claveLogin->ConsultarUsuariosPass($user, $contrasena);
        
        #validar el if // esta mal implementado
        if ($contrasena > 0) {
            $_SESSION['nombreUsuario'] = $user;
            header ('Location: panel-de-control.php');
        }else { ?>
            <script>
                //alert('Incorrecto...');
            </script>
        <?php }
    }
?>