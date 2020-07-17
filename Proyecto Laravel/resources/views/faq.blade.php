<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fravego - Faq</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cssdefaq.css">
  <link rel="shortcut icon" href="./images/bolsa-de-la-compra.svg" />


</head>

<body>

    @include('/layout/navbar')


    <h1 align="center">¿Como te podemos ayudar?</h1>

    <div  class="input-group mb-3 ">
        <input type="text" class="form-control" placeholder="Escribe palabras de busqueda" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <span class="input-group-text" id="basic-addon2">Buscar</span>
        </div>
      </div>

      <p>También puedes revisar los siguientes temas para encontrar la información que buscas.</p>


      <h3>Preguntas Frecuentes</h3>

      <div class="row">
        <div class="col">
          General

          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
        </div>
        <div class="col">
          Atencion al Cliente

          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
        </div>
        <div class="col">
          Medios de Pago

          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
          <div class="info"> <a href="">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
