<?php

    class sql_class{
        private $bd;

        public function __construct() {
            $this->bd = new mysqli(SERVIDOR, USUARIO, CLAVE, BDD);
            $this->bd->set_charset('utf8');
        }

        #Funcion agregar USUARIOS
        public function AgregarUsuarios($usu_usu, $nom_usu, $cor_usu, $con_usu){
            $resultado = $this->bd->query("INSERT INTO usuario (usuarioUsuario, nombreUsuario, correoUsuario, contrasenaUsuario) VALUES ('$usu_usu', '$nom_usu', '$cor_usu', '$con_usu')");
            return true;
        }
        
        #Funcion consultar USUARIOS
        public function ConsultarUsuarios(){
            $resultado = $this->bd->query("SELECT * FROM usuario");
            return $resultado;
        }

        #Funcion consultar USUARIOS PASSWORD
        public function ConsultarUsuariosPass($user, $contrasena){
            $resultado = $this->bd->query("SELECT * FROM usuario
                                            WHERE nombreUsuario = '$user' AND contrasenaUsuario = '$contrasena'");
            return $resultado;
        }
        #Funcion editar USUARIOS
        #Funcion eliminar UUSARIOS


        #Funcion agregar CLIENTES
        #Funcion consultar CLIENTES
        #Funcion editar CLIENTES
        #Funcion eliminar CLIENTES

        #Funcion consultar CATEGORIAS
        public function ConsultarCategorias(){
            $resultado = $this->bd->query("SELECT * FROM categoria");
            return $resultado;
        }

        #Funcion agregar CATEGORIAS
        public function AgregarCategorias($cat_cod, $cat_nom){
            $resultado = $this->bd->query("INSERT INTO categoria (codigoCategoria, nombreCategoria) VALUES ('$cat_cod','$cat_nom')");
            return true;
        }

        #Funcion consultar PRODUCTOS
        public function ConsultarProductos(){
            $resultado = $this->bd->query("SELECT * FROM producto");
            return $resultado;
        }

        #Funcion agregar PRODUCTOS
        public function AgregarProductos($pro_cod, $pro_nom, $pro_mar, $pro_des, $pro_pre, $pro_can, $pro_cat, $pro_fot){
            $resultado = $this->bd->query("INSERT INTO producto (codigoProducto, nombreProducto, marcaProducto, descripcionProducto, precioProducto, cantidadProducto, CATEGORIA_codigoCategoria, fotoProducto) VALUES ('$pro_cod', '$pro_nom', '$pro_mar', '$pro_des', '$pro_pre', '$pro_can', '$pro_cat', '$pro_fot')");
            return true;
        }

        #Funcion eliminar CATEGORIA
        public function EliminarCategoria($cod_cat){
            $resultado = $this->bd->query("DELETE FROM categoria WHERE codigoCategoria = '$cod_cat'");
            return true;
        }

        #Funcion consultar ID CATEGORIA
        public function ConsultarIdCategoria($cod_cat){
            $resultado = $this->bd->query("SELECT * FROM categoria WHERE codigoCategoria = '$cod_cat'");
            return $resultado;
        }

        #Funcion actualizar CATEGORIA
        public function ActualizarCategoria($cod_cat, $nom_cat){
            $resultado = $this->bd->query("UPDATE categoria SET codigoCategoria = '$cod_cat', nombreCategoria = '$nom_cat' WHERE codigoCategoria = '$cod_cat'");
            return $resultado;
        }

        #Funcion eliminar PRODUCTO
        public function EliminarProducto($cod_pro){
            $resultado = $this->bd->query("DELETE FROM producto WHERE codigoProducto = '$cod_pro'");
            return true;
        }

        #Funcion consultar ID PRODUCTO
        public function ConsultarIdProducto($cod_pro){
            $resultado = $this->bd->query("SELECT * FROM producto WHERE codigoProducto = '$cod_pro'");
            return $resultado;
        }

        #Funcion actualizar PRODUCTO
        public function ActualizarProducto($pro_cod, $pro_nom, $pro_mar, $pro_des, $pro_pre, $pro_can, $pro_cat, $pro_fot){
        $resultado = $this->bd->query("UPDATE producto SET codigoProducto = '$pro_cod', nombreProducto = '$pro_nom', marcaProducto = '$pro_mar',descripcionProducto = '$pro_des', precioProducto = '$pro_pre', cantidadProducto = '$pro_can', CATEGORIA_codigoCategoria = '$pro_cat', fotoProducto = '$pro_fot' WHERE codigoProducto = '$pro_cod'");
            return $resultado;
        }
    }

?>