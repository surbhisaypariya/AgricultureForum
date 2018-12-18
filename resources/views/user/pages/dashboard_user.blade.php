@extends ('user.layouts.app')
@section('title','User')
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
          <img class="d-block w-100" src="user/image/u1.jpg" alt="First slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="user/image/u2.jpg" alt="Second slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="user/image/u3.jpg" alt="Third slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="user/image/u4.jpg" alt="Third slide" style="height:500px;width:100px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="user/image/u5.jpg" alt="Third slide" style="height:500px;width:100px;">
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

    <h1 align="center"> <q>Farming is a profession of hope....</q></h1><br>


    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="mr-5">No. of users</div>
          </div>
          <p class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">Users:</span>
          </p>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="mr-5">Number of experts</div>
          </div>
          <p class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">Experts:</span>
          </p>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-question"></i>
            </div>
            <div class="mr-5">Number of Questions</div>
          </div>
          <p class="card-footer text-white clearfix small z-1" href="#">
            <h5 class="float-left">
            <span class="float-right">Questions: </span>
              {{ $questions }}
            </h5>
          </p>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-sticky-note "></i>
            </div>
            <div class="mr-5">Answers</div>
          </div>
          <p class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">Answers:</span>
          </p>
        </div>
      </div>
    </div>


  </div>

@endsection