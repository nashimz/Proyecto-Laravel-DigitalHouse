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
    <link rel="stylesheet" href="./css/productos.css">
    <title>Fravego - Productos</title>
  <link rel="shortcut icon" href="./images/bolsa-de-la-compra.svg" />

</head>

<body>
    @include('/layout/navbar')
    <div class="contendor-slider">
    </div>
    <div class="contenedor">
        <!--Sidenav-->
        <div class="categorias">
            <div class="box">
                <div class="c-titulo">
                    <img src="./images/lista.svg" alt="" class="lista-img">
                    <p>CATEGORIAS</p>
                </div>
                <div class="c-opciones pl-4">
                    @foreach($categorias as $categoria)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            {{$categoria->catNombre}}
                        </label>
                    </div>
                        @endforeach
                </div>
                <div class="c-marcas">
                    <p>MARCAS</p>
                </div>
                <div class="c-marcas-opc pl-4">
                    @foreach($marcas as $marca)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            {{$marca->mkNombre}}

                        </label>
                    </div>
                        @endforeach
                </div>

                <div class="c-precio">
                    <p>PRECIO</p>
                </div>
                <div class="c-precio-opc pl-4">
                    <form>
                        <div class="form-group">
                            <input type="range" class="form-control-range" id="x">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Content-->
        <div class="productos">
            <div class="p-nav">
                <div class="p-titulo">
                    <img src="./images/producto.svg" alt="" class="pro-img">
                    <p>PRODUCTOS</p>
                </div>
                <div class="contenedor2">
                    <div class="p-buscar">
                        <a href="">
                            <img src="./images/busqueda.svg" alt="" class="buscar">
                        </a>
                        <input type="text" name="buscar" id="" placeholder="Buscar">
                    </div>
                    <div class="">
                        <a href="/carrito">
                            <img src="./images/carrito.svg" alt="" class="carrito">
                        </a>
                    </div>
                </div>
            </div>
            <div class="box2">
                @foreach($productos as $producto)
                <a href="/detalle">
                    <div class="item">
                <img src="/images/productos/{{$producto->prdImagen}}" alt="" class="img-fluid">
                <div class="item-title">
                    <p>{{$producto->prdNombre}}</p>
                </div>

                <div class="item-price">
                    <p>${{$producto->prdPrecio}}</p>
                </div>


                </div>
        </a>
                    @endforeach
            </div>
            {{ $productos ->links() }}
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
