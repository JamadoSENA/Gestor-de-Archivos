<?php 

    require_once "../../clases/usuario.php";

    $password = sha1($_POST['contrasenia']);
    $datos = array(
        "nombre" => $POST['nombre'],
        "fechaNacimiento" => $POST['fechaNacimiento'],
        "correo" => $POST['correo'],
        "contrasenia" => $_contrasenia
    );

    $usuario = new Usuario();
    echo $usuario->agregarUsuario($datos);

?>