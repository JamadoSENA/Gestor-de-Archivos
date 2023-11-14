<?php 

    require_once "../../clases/usuario.php";

    $contrasenia = sha1($_POST['contrasenia']);
    $datos = array(
        "nombre" => $_POST['nombre'],
        "fecha" => $_POST['fecha'],
        "correo" => $_POST['correo'],
        "contrasenia" => $contrasenia
    );    

    $usuario = new Usuario();
    $exito = $usuario->agregarUsuario($datos);
    echo $exito;


?>