<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavy Metal || Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/haz.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="cls_div_cuerpo_login">
        <form class="cls_form_login">
            <h5 class="cls_h5_title_login">Acceso</h5>
            <div class="">
                <label for="id_login_usuario" class="cls_label_login">Usuario, teléfono o correo</label>
                <input type="text" class="cls_input_login" id="id_login_usuario" placeholder="Ingresa tu usuario, teléfono o correo">
            </div>
            <div class="">
                <label for="id_login_contrasena" class="cls_label_login">Contraseña</label>
                <input type="password" class="cls_input_login" id="id_login_contrasena" 
                placeholder="Ingresa tu contraseña">
            </div>
            <button type="button" class="cls_btn_forms" id="id_btn_acceder_login">Acceder</button>
            <div class="cls_div_hipervinculos_login">
                <a href="olvide_contraseña.php" class="cls_a_hipervinculos_login">Olvidé mi contraseña</a>
                
                <a href="registro.php" class="cls_a_hipervinculos_login">Crear cuenta</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>