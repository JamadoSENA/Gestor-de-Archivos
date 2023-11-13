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
                    <form id="formRegistro">
                        <label for="">Nombre:</label>
                        <input type="text" name="usuNombre" id="usuNombre" class="form-control">
                        <label for="">Fecha Nacimiento:</label>
                        <input type="text" name="usuFecha" id="usuFecha" class="form-control">
                        <label for="">Email:</label>
                        <input type="email" name="usuEmail" id="usuEmail" class="form-control"> 
                        <label for="">Contraseña</label>
                        <input type="password" name="usuContraseña" id="usuContraseña" class="form-control">
                        <br>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                            <button class="btn btn-primary">Registrar</button>
                            </div>
                            <div class="col-sm-6 text-lefttext-right">
                            <a href="index.php" class="btn btn-secondary">Log In</a>
                            </div>       
                        </div>
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
    </div>

<script src="librerias/sweetalert.min.js"></script>

</body>
</html>