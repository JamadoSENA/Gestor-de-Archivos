<?php 

    require_once "Conexion.php";

    class usuario extends Conectar{

        public function agregarUsuario(){

            $conexion = Conectar::conexion();

            $sql = "INSERT INTO t_usuarios(nombreCompleto, 
            fechaNacimiento, email, contraseña) 
            VAUES (?, ?, ?, ?)"

            $query = $conexion->prepare($sql);
            $query->bind_param('ssss', 
            $datos['nombre'],
            $datos['fechaNacimiento'],
            $datos['email'],
            $datos['contrasenia']);

            $exito = $query->execute();
            $query->close();
            return $exito;

        }


    }

?>