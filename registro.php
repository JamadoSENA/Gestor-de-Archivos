<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/Login/HeadLogo.png" type="image/x-icon">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="librerias/bootstrap4/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Registro</h1>
            <hr>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <form id="formRegistro" method="post" onsubmit="return agregarNuevoUsuario()">
                        <label >Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                        <label >Fecha Nacimiento:</label>
                        <input type="text" name="fecha" id="fechaNacimiento" class="form-control" required>
                        <label >Email:</label>
                        <input type="email" name="correo" id="correo" class="form-control" required> 
                        <label >Contraseña</label>
                        <input type="password" name="contrasenia" id="contrasenia" class="form-control" required>
                        <br>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                            <button class="btn btn-primary">Registrar</button>
                            </div>
                            <div class="col-sm-6 text-right">
                            <a href="index.php" class="btn btn-secondary">Log In</a>
                            </div>       
                        </div>
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
    </div>

<script src="librerias/jquery-3.7.1.min.js"></script>
<script src="librerias/sweetalert.min.js"></script>

<script type="text/javascript">
    function agregarNuevoUsuario(){
        $.ajax({
            method: "POST",
            data: $('#formRegistro').serialize(),
            url:"procesos/usuarios/agregarUsuario.php",
            success: function(respuesta){
                respuesta = respuesta.trim();

                if (respuesta == 1) {
                    $('#formRegistro')[0].reset();
                    swal(":D", "Si", "success");

                }else {

                swal("D:", "No", "Error!");

                }if(respuesta == 2) {

                    swal("Este usuario ya existe, por favor añade otro.");
                
                }else {

swal("D:", "No", "Error!");
            }
        });

        return false;

    }
</script>
</body>
</html>