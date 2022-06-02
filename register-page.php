<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina web streaming de peliculas">
    <meta name="author" content="Freddy Muñoz">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Films+</title>
</head>
<body class="body-login-page-php">
    <div class="d-flex justify-content-center p-5 login-page-form text-white">
        <div class="w-50">
            <a href="index.html" class="text-decoration-none text-white"><h1 class="mt-5 mb-4 text-center">Films+</h1></a>
            <h3 class="mb-3">Ingresa tus datos personales</h3>
            <div class="d-flex flex-wrap justify-content-center align-items-center">
                <div class="mb-3 w-50 p-2 ps-0">
                    <h5 class="text-secondary">* Nombres</h5>
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Ingrese su nombre" aria-label="Ingrese su nombre" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">*</span>
                    </div>
                </div>
                <div class="mb-3 w-50 p-2 ps-0">
                    <h5 class="text-secondary">Apellidos</h5>
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Ingrese sus apellidos" aria-label="Ingrese sus apellidos" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">*</span>
                    </div>
                </div>
                <div class="mb-3 w-50 p-2 ps-0">
                    <h5 class="text-secondary">Telefono</h5>
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Ejemplo +51 999xxxxxx" aria-label="Ejemplo +51 999xxxxxx" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">*</span>
                    </div>
                </div>
                <div class="mb-3 w-50 p-2 ps-0">
                    <h5 class="text-secondary">Correo electronico</h5>
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="ejemplo@gmail.com" aria-label="ejemplo@gmail.com" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">*</span>
                    </div>
                </div>
                <div class="mb-3 w-50 p-2 ps-0">
                    <h5 class="text-secondary">Tarjeta de credito o debito</h5>
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Ingrese numero de tarjeta" aria-label="Ingrese numero de tarjeta" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2"> <img src="img/visa.png" alt=""> &nbsp; <img src="img/american-express.png" alt=""></span>
                    </div>
                </div>
                <div class="mb-3 w-25 p-2 ps-0">
                    <h5 class="text-secondary">Fecha de vencimiento</h5>
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="MM/AA" aria-label="MM/AA" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">*</span>
                    </div>
                </div>
                <div class="mb-3 w-25 p-2 ps-0">
                    <h5 class="text-secondary">Codigo de seguridad</h5>
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="CVV" aria-label="CVV" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">*</span>
                    </div>
                </div>
                <div class="w-50 p-2 ps-0">
                    <h5 class="text-secondary">Seleccione plan</h5>
                    <select class="form-select p-3 select-register" id="select-plans">
                        <option value="">Seleccione Plan</option>
                        <option value="">Mensual PEN 20.00/mes*</option>
                        <option value="">Anual PEN 259.90/año*</option>
                    </select>
                </div>
                <div class="w-50">
                    <button type="button" class="btn btn-primary btn-lg w-100 mt-3">Registrarse</button>
                </div>
            </div>
                
            <div>
                <h4 class="mt-4 fs-6 text-secondary">¿Ya tienes cuenta? <a href="login-page.php" class="nav-item text-white text-decoration-none" title="Registrate">Inicia Sesión</a></h4>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
