<?php
session_start();
if ($_POST) {
    $erroresLogin = [];
    // Validams el input "email"
    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $errores['email'] = "Debés completar este campo";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Debés ingresar un email válido. No te olvides de usar @ y un dominio válido también (.com, .ar, etc)";
        }
    }
    // Validamos el input "password"
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errores['password'] = "Debés completar este campo";
        }
        if (strlen($_POST['password']) < 6) {
            $errores['password'] = "Tu contraseña debe tener como mínimo 6 caracteres";
        }
    }

    if (count($erroresLogin) == 0) {
        $usuariosGuardados = file_get_contents('./json/usuarios.json');
        $usuariosGuardados = explode(PHP_EOL, $usuariosGuardados);
        array_pop($usuariosGuardados);
        foreach ($usuariosGuardados as $usuario) {
            $usuarioFinal = json_decode($usuario, true);
            if ($usuarioFinal['email'] == $_POST['email']) {
                if (password_verify($_POST['password'], $usuarioFinal['password'])) {
                    // $_SESSION['email'] = $usuarioFinal['email'];
                    if (isset($_POST['recordarme']) && $_POST['recordarme'] == 'on') {
                        setcookie('emailUsu', $usuarioFinal['email'], time() + 60 * 60 * 24 * 7);
                        setcookie('passUsu', $usuarioFinal['password'], time() + 60 * 60 * 24 * 7);
                    }
                    $_SESSION = [
                        'name' => $usuarioFinal['name'],
                        'email' => $usuarioFinal['email'],
                        'password' => $usuarioFinal['password']
                    ];
                    header("Location: productos.php");
                    exit;
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <!--========== Barra de Navegacion========= -->
    @include('/layout/navbar')


    <!--========== Login /Registro========= -->

    <!--
    Nombre que puse en las clases para agregar cambios en el CSS: main-section, opciones.
-->

<div class="container-fluid" >
    <div class="row justify-content-lg-end justify-content-md-center justify-content-sm-center">
        <div class="col-lg-4 col-md-6 col-sm-12" >
            <form class="form-container " action="login.php" method="post">
                <ul class="nav justify-content-center tab">
                    <li class="nav-item">
                        <a class="nav-link " href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro">Registrarse</a>
                    </li>
                </ul>
                <br >
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico">
                    <small><?= isset($errores['email']) ? $errores['email'] : '' ?></small>
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" name='password' id="pass" placeholder="Contraseña">
                    <small><?= isset($errores['password']) ? $errores['password'] : '' ?></small>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="recordarme" name="recordarme">
                    <label class="form-check-label" for="gridCheck">Recordarme</label>
                </div>
                    <br>
                <button type="submit" class="btn btn-light" class="boton">Iniciar sesion</button>
            </form>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
