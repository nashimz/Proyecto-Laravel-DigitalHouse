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
    <link rel="stylesheet" href="./css/carrito.css">
    <title>Fravego - Carrito</title>
  <link rel="shortcut icon" href="./images/bolsa-de-la-compra.svg" />

</head>

<body>
    @include('/layout/navbar')

    <div class="contenedor">
        <div class="box">
            <div class="productos">
                <div class="title">
                    <img src="./images/carrito.svg" alt="" width="25px">
                    <p>Carrito de compras</p>
                </div>
                <div class="item">
                    <img src="./images/sams-1.webp" alt="" class="">
                    <div class="i-nombre">
                        Sansung galaxy
                    </div>
                    <div class="i-precio">
                        $8000
                    </div>
                    <div class="i-cantidad">
                        <a href="">
                            <img src="./images/menos.svg" alt="" class="menos">
                        </a>
                        1
                        <a href="">
                            <img src="./images/mas.svg" alt="" class="mas">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/sams-1.webp" alt="" class="">
                    <div class="i-nombre">
                        Sansung galaxy
                    </div>
                    <div class="i-precio">
                        $8000
                    </div>
                    <div class="i-cantidad">
                        <a href="">
                            <img src="./images/menos.svg" alt="" class="menos">
                        </a>
                        1
                        <a href="">
                            <img src="./images/mas.svg" alt="" class="mas">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/sams-1.webp" alt="" class="">
                    <div class="i-nombre">
                        Sansung galaxy
                    </div>
                    <div class="i-precio">
                        $8000
                    </div>
                    <div class="i-cantidad">
                        <a href="">
                            <img src="./images/menos.svg" alt="" class="menos">
                        </a>
                        1
                        <a href="">
                            <img src="./images/mas.svg" alt="" class="mas">
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/sams-1.webp" alt="" class="">
                    <div class="i-nombre">
                        Sansung galaxy
                    </div>
                    <div class="i-precio">
                        $8000
                    </div>
                    <div class="i-cantidad">
                        <a href="">
                            <img src="./images/menos.svg" alt="" class="menos">
                        </a>
                        1
                        <a href="">
                            <img src="./images/mas.svg" alt="" class="mas">
                        </a>
                    </div>
                </div>

            </div>
            <div class="total">
                <div class="c-titulo">
                    <img src="./images/mano.svg" alt="" width="25px">
                    <p>Total de compra</p>
                </div>
                <div class="c-numeros">
                    <div class="c-subtotal">
                        <p>Subtotal</p>
                        <p>$8000</p>
                    </div>
                    <div class="c-envio">
                        <p>Envio</p>
                        <p>Gratis</p>
                    </div>
                    <div class="c-total">
                        <p>Total</p>
                        <p>$8000</p>
                    </div>
                    <a class="pagar">
                        <p>
                            PAGAR

                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
