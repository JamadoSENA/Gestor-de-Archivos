<?php 

    require_once "conexion.php";

    class Usuario extends Conectar{

        public function agregarUsuario($datos){

            $conexion = Conectar::conexion();
            if (self::buscarUsuarioRepetido($datos['correo'])){
                return 2;
            }else {

            $sql = "INSERT INTO t_usuarios(nombreCompleto, 
            fechaNacimiento, email, contraseña) 
            VALUES (?, ?, ?, ?)";

            $query = $conexion->prepare($sql);

            $query->bind_param('ssss', 
                    $datos['nombre'],
                    $datos['fecha'],
                    $datos['correo'],
                    $datos['contrasenia']);


            $exito = $query->execute();
            $query->close();
            return $exito;

        }}

        public function buscarUsuarioRepetido($usuario){

            $conexion = Conectar::conexion();

            $sql = "SELECT email FROM t_usuarios
            WHERE correo = '$usuario'";

            $result = mysqli_query($conexion, $sql);
            $datos = mysqli_fetch_array($result);

            if ($datos['correo'] != "" || $datos['correo'] == $usuario){
                return 1;
            } else {
                return 0;
            }
            



        }


    }

?>