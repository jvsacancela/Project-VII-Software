<?php
    session_start();

    require_once '../../../config/conexion.php';
    require_once '../../../config/sql_class.php';

    $consulta_class = new sql_class();

    $resultados_cat = $consulta_class-> ConsultarCategorias();
    $resultado_cat = $consulta_class-> ConsultarCategorias();
    $resultados_pro = $consulta_class-> ConsultarProductos();

    if(!isset($_SESSION['nombreUsuario'])){
        header ('Location: iniciar-usuario.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE CONTROL | IMPORTADORA MENDEZ</title>
    <link rel="stylesheet" href="../../assets/style/general.css ">
    <link rel="stylesheet" href="../../assets/style/panel-de-control.css">
    <!--LIBRERIA PARA ICONOS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
    <div id="panel-contenedor">
        <div id="panel-datos">
            <div id="midata">
                <h1 id="nom-user">Bienvenido <?php echo $_SESSION['nombreUsuario']; ?></h1>
                <a href="cerrar-usuario.php">Salir</a>
            </div>
            <br>
            <hr>
            <div>
                <br>
                <h2>Categoria</h2>
                <div id="contenedor-categoria">
                    <!-- TABLA PARA CONSULTAR CATEGORIAS-->
                        <table id="tabla-categorias">
                            <thead id="titulo-tabla">
                                <th>CODIGO</th>
                                <th>NOMBRE</th>
                                <th>ACCION</th>
                            </thead>

                            <tbody id="cuerpo-tabla">
                    
                                <?php while($display = $resultados_cat->fetch_assoc()){?>
                                    <tr>
                                        <td> <?php echo $display['codigoCategoria']?>  </td>
                                        <td> <?php echo $display['nombreCategoria'] ?> </td>
                                        <td>
                                            <a  href="php/edit_cat.php?id=<?php echo $display['codigoCategoria']?>"><i class="fa fa-edit" id="edit"></i></a>
                                            <a href="php/delete_cat.php?id=<?php echo $display['codigoCategoria'] ?>"><i class="fa fa-trash" id="delete"></i></a>
                                        </td>
                                <?php } ?>
                                </tr>
                            </tbody>
                        </table>

                    <!-- FORMULARIO PARA AGREGAR CATEGORIA-->
                <form action="php/agregar_categoria.php" method="POST">
                    <div id="caja-form">
                        <div id="cajaText">
                            <label for="txt-cat-cod">Codigo categoria:</label>
                            <input type="text" name="codigoCategoria" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-cat-nom">Nombre categoria:</label>
                            <input type="text" name="nombreCategoria" autocomplete="off">
                        </div>

                        <button id="btn-save" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
                
            </div>

            <br>
            <hr>
            <br>

            <div>
                <h2>Productos</h2>
                <br>
                <!-- TABLA PARA CONSULTAR PRODUCTOS-->
                <table id="tabla-categorias">
                    <thead id="titulo-tabla">
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>MARCA</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>CATEGORIA</th>
                        <th>ACCION</th>
                    </thead>

                    <tbody id="cuerpo-tabla">
                        <?php while($display = $resultados_pro->fetch_assoc()){?>
                        <tr>
                            <td> <?php echo $display['codigoProducto']?>  </td>
                            <td> <?php echo $display['nombreProducto'] ?> </td>
                            <td> <?php echo $display['marcaProducto'] ?> </td>
                            <td> <?php echo $display['descripcionProducto'] ?> </td>
                            <td> <?php echo $display['precioProducto'] ?> </td>
                            <td> <?php echo $display['cantidadProducto'] ?> </td>
                            <td> <?php echo $display['CATEGORIA_codigoCategoria'] ?> </td>
                            <td>
                                <a href="php/edit_pro.php?id=<?php echo $display['codigoProducto']?>"><i class="fa fa-edit" id="edit"></i></a>
                                <a href="php/delete_pro.php?id=<?php echo $display['codigoProducto'] ?>"><i class="fa fa-trash" id="delete"></i></a>
                            </td>

                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
    
                

                <form action="php/agregar_producto.php" method="POST">
                    <div id="caja-form">
                        <div id="cajaText">
                            <label for="txt-pro-cod">Codigo producto:</label>
                            <input type="text" name="codigoProducto" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-pro-nom">Nombre producto:</label>
                            <input type="text" name="nombreProducto" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-pro-mar">Marca producto:</label>
                            <input type="text" name="marcaProducto" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-pro-des">Descripcion producto:</label>
                            <input type="text" name="descripcionProducto" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-pro-pre">Precio producto:</label>
                            <input type="text" name="precioProducto" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-pro-can">Cantidad producto:</label>
                            <input type="text" name="cantidadProducto" autocomplete="off">
                        </div>
                        <div id="cajaText">
                            <label for="txt-pro-can">Categoria producto:</label>
                            <select name="CATEGORIA_codigoCategoria" id="select-cat-pro">
                                <?php while($display = $resultado_cat->fetch_assoc()){?>
                                    <option value="<?php echo $display['codigoCategoria'] ?>">
                                        <?php echo $display['nombreCategoria'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div id="cajaText">
                            <label for="txt-pro-nom">Imagen producto:</label>
                            <input type="file" name="fotoProducto" autocomplete="off">
                        </div>

                        <button id="btn-save" type="submit">Guardar</button>
                    </div>
                </form>

            </div>
            
        </div>
        
        
    </div>
    
</body>

<script src="panel-de-control.js"></script>
</html>