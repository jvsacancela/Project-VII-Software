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

        #Funcion consultar PRODUCTOS
        public function ConsultarProductos(){
            $resultado = $this->bd->query("SELECT * FROM producto");
            return $resultado;
        }
    }

?>