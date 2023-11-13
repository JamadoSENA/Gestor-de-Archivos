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
                        <input type="text" name="usuNombre" id="usuNombre" class="form-control" required>
                        <label >Fecha Nacimiento:</label>
                        <input type="text" name="usuFecha" id="usuFecha" class="form-control" required>
                        <label >Email:</label>
                        <input type="email" name="usuEmail" id="usuEmail" class="form-control" required> 
                        <label >Contraseña</label>
                        <input type="current-password" name="usuContraseña" id="usuContraseña" class="form-control" required>
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
            succes:function(respuesta){
                alert(respuesta);
            }
        });

        return false;

    }
</script>
</body>
</html>