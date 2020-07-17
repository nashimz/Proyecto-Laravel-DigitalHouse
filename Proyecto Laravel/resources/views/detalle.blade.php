<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/detalle.css">
    <title>Fravego - Detalle</title>
  <link rel="shortcut icon" href="./images/bolsa-de-la-compra.svg" />

</head>

<body>
    @include('/layout/navbar')

    <div class="contenedor py-2">
        <div class="box mb-2">
            <div class="imagenes">
                <div class="img-lista">
                    <img src="./images/sams-1.webp" alt="">
                    <img src="./images/sams-2.webp" alt="">
                    <img src="./images/sams-3.webp" alt="">
                </div>
                <div class="img-full">
                    <img src="./images/sams-1.webp" alt="">
                </div>
            </div>
            <div class="detalle">
                <div class="nombre-p">
                    <p>Samsung galaxy</p>
                </div>
                <div class="price-p">
                    <p>$8000</p>
                </div>
                <div class="info-p">
                    <p>Categoria: Smarthphone</p>
                    <p>Stock: En stock</p>
                </div>
                <div class="linea-d">
                </div>
                <div class="descripcion-p">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, ut. Ullam, expedita vel. </p>
                </div>
                <div class="linea-d">
                </div>
                <div class="opciones-p">
                    <div class="cantidad-p">
                        <a href="">
                            <img src="./images/linea-menos.svg" alt="">
                        </a>
                        <input type="text" name="" id="" placeholder="1">
                        <a href="">
                            <img src="./images/signo-mas.svg" alt="">
                        </a>
                    </div>
                    <p>
                        <a href="/carrito" class="add">AÑADIR</a>
                    </p>
                    <a href="">
                        <img src="./images/corazon.svg" alt="" class="like">
                    </a>
                </div>
                <div class="linea-d">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>