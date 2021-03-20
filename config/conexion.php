<?php 

  /*  define ('SERVIDOR', 'localhost');
    define ('USUARIO', 'u614831242_impmendez');
    define ('CLAVE', 'Dospapasy1cola');
    define ('BDD', 'u614831242_impmendezbd');*/

    define ('SERVIDOR', 'localhost');
    define ('USUARIO', 'root');
    define ('CLAVE', '');
    define ('BDD', 'importadorabd');

    $conexion = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BDD) or die ('Error :c');


?>
