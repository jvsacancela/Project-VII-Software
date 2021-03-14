<link rel="stylesheet" href="../../../assets/style/panel-de-control.css">
<link rel="stylesheet" href="../../../assets/style/general.css">
<h2>Editar datos</h2>

<?php 
require_once '../../../../config/conexion.php';
require_once '../../../../config/sql_class.php';

$consulta_class = new sql_class();

$id = $_GET['id'];

$resultados_pro = $consulta_class-> ConsultarIdProducto($id);
$resultado_cat = $consulta_class-> ConsultarCategorias();
    
    while($display = $resultados_pro->fetch_assoc()){?>
        <form action="update_pro.php" method="POST">
            <div id="caja-form">
                <div id="cajaText">
                    <label for="txt-pro-cod">Codigo producto:</label>
                    <input type="text" name="codigoProducto" value="<?php echo $display['codigoProducto']; ?>">
                </div>

                <div id="cajaText">
                    <label for="txt-pro-nom">Nombre producto:</label>
                    <input type="text" name="nombreProducto" value="<?php echo $display['nombreProducto']; ?>">
                </div>

                <div id="cajaText">
                    <label for="txt-pro-mar">Marca producto:</label>
                    <input type="text" name="marcaProducto" value="<?php echo $display['marcaProducto']; ?>">
                </div>

                <div id="cajaText">
                    <label for="txt-pro-des">Descripcion producto:</label>
                    <input type="text" name="descripcionProducto" value="<?php echo $display['descripcionProducto']; ?>">
                </div>

                <div id="cajaText">
                    <label for="txt-pro-pre">Precio producto:</label>
                    <input type="text" name="precioProducto" value="<?php echo $display['precioProducto']; ?>">
                </div>

                <div id="cajaText">
                    <label for="txt-pro-can">Cantidad producto:</label>
                    <input type="text" name="cantidadProducto" value="<?php echo $display['cantidadProducto']; ?>">
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
                
                <button id="btn-save" type="submit">Actualizar</button>
            </div>
        </form>
   <?php  } ?>