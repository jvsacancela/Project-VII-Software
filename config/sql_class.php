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
        public function AgregarProductos($pro_cod, $pro_nom, $pro_mar, $pro_des, $pro_pre, $pro_can, $pro_cat, $pro_img){
            $resultado = $this->bd->query("INSERT INTO producto (codigoProducto, nombreProducto, marcaProducto, descripcionProducto, precioProducto, cantidadProducto, CATEGORIA_codigoCategoria, fotoProducto) VALUES ('$pro_cod', '$pro_nom', '$pro_mar', '$pro_des', '$pro_pre', '$pro_can', '$pro_cat', '$pro_img')");
            return true;
        }
    }

?>