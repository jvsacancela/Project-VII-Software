<link rel="stylesheet" href="../../../assets/style/panel-de-control.css">
<link rel="stylesheet" href="../../../assets/style/general.css">
<h2>Editar datos</h2>

<?php 
require_once '../../../../config/conexion.php';
require_once '../../../../config/sql_class.php';

$consulta_class = new sql_class();

$id = $_GET['id'];
$resultados_cat = $consulta_class-> ConsultarIdCategoria($id);

while($display = $resultados_cat->fetch_assoc()){?>
    <form action="update_cat.php" method="POST">
        <div id="caja-form">
            <div id="cajaText">
                <label for="txt-cat-cod">Codigo categoria:</label>
                <input type="text" name="codigoCategoria" value="<?php echo $display['codigoCategoria']; ?>">
            </div>
    
            <div id="cajaText">
                <label for="txt-cat-nom">Nombre categoria:</label>
                <input type="text" name="nombreCategoria" value="<?php echo $display['nombreCategoria']; ?>">
            </div>
    
            <button id="btn-save" type="submit">Actualizar</button>
        </div>
    </form>
    
<?php } ?> 