@extends('plantilla')
@section('contenedor')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  </ol>
  <div class="carousel-inner" style="justify-content: center; align-items: center">
    <div class="carousel-item active holder">
      <img src="{{ asset('img/01.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/02.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/03.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/04.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/05.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/06.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/07.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/08.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/09.jpeg') }}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item holder">
      <img src="{{ asset('img/10.jpeg') }}" class="d-block w-100" alt="..." >
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
@endsection