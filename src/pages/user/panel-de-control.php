<?php
    session_start();

    require_once '../../../config/conexion.php';
    require_once '../../../config/sql_class.php';

    $consulta_class = new sql_class();

    $resultados_cat = $consulta_class-> ConsultarCategorias();
    $resultados_pro = $consulta_class-> ConsultarProductos();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE CONTROL</title>
    <link rel="stylesheet" href="../../assets/style/general.css ">
    <link rel="stylesheet" href="../../assets/style/panel-de-control.css">
</head>
<body>
    <div id="panel-contenedor">
        <div id="panel-datos">
        
            <h1 id="nom-user">Bienvenido <?php echo $_SESSION['nombreUsuario']; ?></h1>
            <a href="cerrar-usuario.php">Salir</a>
            <hr>
            <div>
                <h3>Categoria</h3>
                <!-- CONSULTA DE CATEGORIAS-->
                <input type="button" value="Consultar Categorias" id="btn-consulta-categoria">

                <!-- TABLA PARA CONSULTAR CATEGORIAS-->
                <div id="caja">
                <table id="tabla-categorias">
                    <thead id="titulo-tabla">
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                    </thead>

                    <tbody id="cuerpo-tabla">
                        <?php while($display = $resultados_cat->fetch_assoc()){?>
                        <tr>
                            <td> <?php echo $display['codigoCategoria']?>  </td>
                            <td> <?php echo $display['nombreCategoria'] ?> </td>
                            <td><button id="delete">Eliminar</button></td>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
                </div>

                 <!-- AGREGAR CATEGORIA-->
                <input type="button" value="Agregar Categoria" id="btn-agregar-categoria">
                
                <!-- FORMULARIO PARA AGREGAR CATEGORIA-->
                <form action="php/agregar_categoria.php" method="POST">
                    <div id="caja">
                        <div id="cajaText">
                            <label for="txt-cat-cod">Codigo categoria:</label>
                            <input type="text" name="codigoCategoria" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-cat-nom">Nombre categoria:</label>
                            <input type="text" name="nombreCategoria" autocomplete="off">
                        </div>

                        <button type="submit">Guardar</button>
                    </div>

                </form>

            </div>

            <br>

            <div>
                <h3>Productos</h3>
                 <!-- CONSULTA PRODUCTOS-->
                <input type="button" value="Consultar Productos" id="btn-consulta-producto">

                <!-- TABLA PARA CONSULTAR PRODUCTOS-->

                <div id="caja">
                <table id="tabla-categorias">
                    <thead id="titulo-tabla">
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>MARCA</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>CATEGORIA</th>
                    </thead>

                    <tbody id="cuerpo-tabla">
                        <?php while($display = $resultados_pro->fetch_assoc()){?>
                        <tr>
                            <td> <?php echo $display['codigoProducto']?>  </td>
                            <td> <?php echo $display['nombreProducto'] ?> </td>
                            <td> <?php echo $display['descripcionProducto'] ?> </td>
                            <td> <?php echo $display['precioProducto'] ?> </td>
                            <td> <?php echo $display['marcaProducto'] ?> </td>
                            <td> <?php echo $display['cantidadProducto'] ?> </td>
                            <td> <?php echo $display['CATEGORIA_codigoCategoria'] ?> </td>
                            <td><button id="delete">Eliminar</button></td>
                            <td><input id="delete" type="button" value="-999"></td>

                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
                </div>
                
                 <!-- AGREGAR PRODUCTOS -->
                <input type="button" value="Agregar Productos" id="btn-agregar-producto">

                <form action="php/agregar_producto.php" method="POST">
                    <div id="caja">
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
                            <!--<select name="CATEGORIA_codigoCategoria" id="select-cat-pro">
                                <?php while($display = $resultados_cat->fetch_assoc()){?>
                                    <option value="<?php echo $display['codigoCategoria']?>">
                                        <?php echo $display['nombreCategoria']?>
                                    </option>
                                <?php } ?>
                            </select>-->
                            <input type="text" name="CATEGORIA_categoriaProducto" autocomplete="off">
                        </div>

                        <div id="cajaText">
                            <label for="txt-pro-nom">Imagen producto:</label>
                            <input type="file" name="fotoProducto" autocomplete="off">
                        </div>

                        <button type="submit">Guardar</button>
                    </div>

                </form>

            </div>
            
        </div>
        
        <div id="panel-contenido">
        aqui contenido
        </div>
        
    </div>


    
</body>

<script src="panel-de-control.js"></script>
</html>