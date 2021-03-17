<?php 

    define ('SERVIDOR', 'localhost');
    define ('USUARIO', 'u614831242_impmendez99');
    define ('CLAVE', 'Unapapay1cola');
    define ('BDD', 'u614831242_impmendezbd');

    $conexion = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BDD) or die ('Error :c');


?>
