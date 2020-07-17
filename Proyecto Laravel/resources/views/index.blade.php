<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/3883c72470.js" crossorigin="anonymous"></script>
  <title>Fravego - Home</title>
  <script src="carousel.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/homestyle.css">
  <link rel="shortcut icon" href="./images/bolsa-de-la-compra.svg" />

</head>

<body>

 @include('/layout/navbar')

 <div class="container-fluid mb-5">
   <div class="row px-4 mb-4">
     <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 mt-5 ">
    
       <section>
         <h1>fravego</h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat praesentium tempore quibusdam sequi autem atque eligendi odit vero itaque
        </p>
        <a href="/productos" type="button" class="btn btn-dark mt-3" data-toggle="button" aria-pressed="false" autocomplete="off" >
          SHOP
        </a>
             </section>
     </div>
     <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-5">

      <div id="carouselExampleIndicators " class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators ">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="./images/sams-1.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/sams-1.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/sams-1.webp" class="d-block w-100" alt="...">
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  
</div>


  {{-- <img src="./images/person_transparent (1).jpg" alt="" class="imagentipa"> --}}





  </body>





  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
