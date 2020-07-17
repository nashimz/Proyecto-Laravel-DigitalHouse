<?php
session_start();

$datos = [
  'name' => ' ',
  'email' => ' ',
  'password' => ' ',
];

if (empty($_SESSION)) {
  $datos = [
    'name' => ' ',
    'email' => ' ',
    'password' => ' '
  ];
} else {
  $datos = [
    'name' => $_SESSION['name'],
    'email' => $_SESSION['email'],
    'password' => $_SESSION['password']
  ];
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="./images/bolsa-de-la-compra.svg" />

  <link rel="stylesheet" href="./css/perfilusuario.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/3883c72470.js" crossorigin="anonymous"></script>
  <title>Fravego - Perfil</title>
  <script src="carousel.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Oxygen&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
</head>

<body>
    @include('/layout/navbar')

  <div class="detalles">
    <h2>Detalles de Cuenta</h2>

    <div class="detalles-cuenta">

      <p>Nombre</p>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" aria-label="First name" class="form-control" value="<?= isset($datos['name']) ? $datos['name'] : '' ?>">
      </div>
      <p>Apellido</p>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" aria-label="First name" class="form-control">
      </div>
      <p>Email</p>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" aria-label="First name" class="form-control" value="<?= isset($datos['email']) ? $datos['email'] : '' ?>">
      </div>
      <p>Contraseña</p>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" aria-label="First name" class="form-control" value="<?= isset($datos['password']) ? '' : '' ?>">
      </div>
      <button type="button" class="btn btn-info">Guardar Cambios</button>
    </div>
  </div>
  <div class="container-usuario">


    <img src="./images/usuario.svg" alt="">
    <h1>Blanca Nieves</h1>
    <button type="button" class="btn btn-info">Editar</button>

    <br>
    <br>
    <p class="title-descripcion">Descripcion</p>
    <p class="desarollo-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, optio dicta! Impedit assumenda, aliquid eveniet odit nesciunt tenetur voluptatem fugiat nemo architecto repellendus itaque omnis a consequatur unde voluptate quam.</p>

  </div>
</body>

</html>
