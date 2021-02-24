<nav id="navegacion">
    <div id="nav-div">
        <div id="nav-marca">
            <a id="enlace-menu"href="index.php"><img id="img-logo"src="src/assets/img/logo.jpg" alt="logo"></a>
        </div>
       
        <div id="nav-buscar">
            <input id="btn-filtro" type="button" value="Filtro">
            <input id="input-buscar" type="text">
            <input id="btn-buscar" type="button" value="Buscar">
        </div>

        <div id="nav-compras">
        <p>Carrito de compras aqui</p>
        </div>
           
    </div>

    <div id="nav-enlaces">
        <input type="checkbox" name="checkbox-categoria" id="cb-categoria" class="input-check">
        <label id="btn-menu" for="cb-categoria"></label>
        
        <!--categorias-->

        <?php while($display = $result_cat->fetch_assoc()){ ?>

        <div id="content-categorias" class="content">
            <p><a id="enlace-categoria" href="page-productos.php">  <?php echo $display['nombreCategoria'];  ?>  </a> </p>
        </div>

        <?php } ?>

    </div> 
</nav>
