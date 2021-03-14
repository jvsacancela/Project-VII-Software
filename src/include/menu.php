<!--LIBRERIA PARA FUENTES-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<nav id="navegacion">
    <div id="nav-div">
        <div id="nav-marca">
            <a id="enlace-menu"href="index.php"><img id="img-logo"src="src/assets/img/logo.jpg" alt="logo"></a>
        </div>
       
        <div id="nav-buscar">
            <input id="btn-filtro" type="button" value="Filtro">
            <input id="input-buscar" type="text">
            <button id="btn-buscar">Buscar <i class="fa fa-search"></i></button>
        </div>

        <div id="nav-compras">
            <a href="src/pages/page-cart.php"><i class="fa fa-shopping-cart" id="cart"></i></a>
            <div id="contador"><span id="cont">9</span></div>
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
