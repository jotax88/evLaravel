@extends('layouts.layout_web')

@section('title')
	Electroventas-Conectados con tus ideas
@endsection

@include('common.errors')  

<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active"    style="height:55vh !important; background-image: url('{{ asset('images/slider/allbose.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="height:55vh !important; background-image: url('{{ asset('images/slider/mundial-2018.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item"style="height:55vh !important;background-image: url('{{ asset('images/slider/s1-bose.jpg') }}')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
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
    </header>

@section('content')
	
	 <!-- Page Content -->
    <div class="container">

      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">BANNER!</p>
        </div>
    </div>

       <!-- Section  Categorias y Novedades -->
      <h2>CATEGORÍAS Y NOVEDADES</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
           
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
      </div>
      <!-- /.row -->

	
	<div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">BANNER!</p>
        </div>
    </div>
	<!-- Section  PRODUCTOS DESTACADOS -->
      <h2>PRODUCTOS DESTACADOS</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
           
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card ">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            
          </div>
        </div>
      </div>
      <!-- /.row -->
@endsection