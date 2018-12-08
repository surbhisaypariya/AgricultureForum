@extends ('expert.layouts.app')
@section('title','Dashboard')
@section('content')

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="expert/image/sl1.jpg" alt="First slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="expert/image/sl2.jpg" alt="Second slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="expert/image/sl3.jpg" alt="Third slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="expert/image/sl4.jpg" alt="Third slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="expert/image/sl5.jpg" alt="Third slide" style="height:500px;width:100px;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <br>
    <div class="row"><!-- col-xl-3 col-sm-6 mb-3 -->
      <div class="col-md-5">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-question-circle"></i>
            </div>
            <div class="mr-5">No. of Questions</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <!-- <i class="fas fa-angle-right"></i> -->
            </span>
          </a>
        </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-5">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-list"></i>
            </div>
            <div class="mr-5">Number of Answers</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
          </a>
        </div>
      </div>

    </div>
    <br><br>
  </div>

@endsection