<!DOCTYPE html>
<?php
session_start();


$errores = [];
$name = "";
$email = "";
$password = "";

if ($_POST) {
    // Validamos el input "nombre"
    if (isset($_POST['name'])) {
        if (empty($_POST['name'])) {
            $errores['name'] = "Debés completar este campo";
        } elseif (strlen($_POST['name']) < 2) {
            $errores['name'] = "Tu nombre debe tener al menos 2 caracteres";
        } else {
            $name = $_POST['name'];
        }
    }
    // Validams el input "email"
    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $errores['email'] = "Debés completar este campo";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Debés ingresar un email válido. No te olvides de usar @ y un dominio válido también (.com, .ar, etc)";
        } else {
            $email = $_POST['email'];
        }
    }
    // Validamos el input "password"
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errores['password'] = "Debés completar este campo";
        }
        if (strlen($_POST['password']) < 6) {
            $errores['password'] = "Tu contraseña debe tener como mínimo 6 caracteres";
        } else {
            $password = $_POST['password'];
        }
    }
    if (isset($_POST['repassword'])) {
        if (empty($_POST['repassword'])) {
            $errores['repassword'] = "Debés completar este campo";
        }
        if ($_POST['repassword'] != $_POST['password']) {
            $errores['repassword'] = "Las contraseñas deben coincidir";
        }
    }

    if (count($errores) === 0) {
        $exito = '';
        $usuariojson = [];
        $usuariojson = file_get_contents('./json/usuarios.json');

        $usuario = [
            'name' => trim($name),
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $usuariojson = json_encode($usuario);
        file_put_contents('./json/usuarios.json', $usuariojson . PHP_EOL, FILE_APPEND);

        if (isset($_POST['recordarme']) && $_POST['recordarme'] == 'on') {
            setcookie('emailUsu', $usuario['email'], time() + 60 * 60 * 24 * 7);
            setcookie('passUsu', $usuario['password'], time() + 60 * 60 * 24 * 7);
        }

        if ($_FILES) {
            $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            $nombreA = $_FILES['avatar']['name'] . $email . $ext;
            $ruta = "imgPerfil/" . $_FILES['avatar']['name'];
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $ruta);
        }

        header('location:login.php');
        exit;
    }
}
//persistir datos
function persistirDato($array, $string)
{
    if (isset($array[$string])) {
        return "";
    } else {
        if (isset($_POST[$string])) {
            return $_POST[$string];
        }
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>

    <!--=========== Barra de Navegacion ======== -->
    @include('/layout/navbar')

    <!--=======Login / Registro ====== -->

    <div class="container-fluid" >
        <div class="row justify-content-lg-end justify-content-md-center justify-content-sm-center">
            <div class="col-lg-4 col-md-6 col-sm-12" >
                <form class="form-container" action="registro.php" method="post" enctype='multipart/form-data'>
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
                        <label for="exampleFormControlFile1"> <img src="./images/usuario2.svg" alt="">Imagen de perfil</label>
                        <input type="file" class="form-control-file" name="avatar" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="name">Usuario </label>
                        <input type="name" class="form-control" name="name" id="name" placeholder="Nombre de Usuario" value="<?= persistirDato($errores, 'name') ?>">
                        <small><?= isset($errores['name']) ? $errores['name'] : '' ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico" value="<?= persistirDato($errores, 'email') ?>">
                        <small><?= isset($errores['email']) ? $errores['email'] : '' ?></small>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" class="form-control" name='password' id="pass" placeholder="Contraseña" value="<?= persistirDato($errores, 'password') ?>">
                        <small><?= isset($errores['password']) ? $errores['password'] : '' ?></small>
                    </div>
                    <div class="form-group">
                        <label for="repass">Contraseña otra vez</label>
                        <input type="password" class="form-control" name='repassword' id="repass" placeholder="Contraseña" value="<?= persistirDato($errores, 'repassword') ?>">
                        <small><?= isset($errores['repassword']) ? $errores['repassword'] : '' ?></small>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="recordarme" name="recordarme">
                            <label class="form-check-label" for="gridCheck">Recordarme</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-light" class="boton">Registrarme</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
