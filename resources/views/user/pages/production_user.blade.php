@extends ('user.layouts.app')
@section('title','Production')
@section('content')
<div class="container">
   <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-4"></div>
    <div class="col-md-3">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>

  </div><br><br>

  <div class="row">
    <div class="col-md-2">
      <p>Select Category:</p>
    </div>
    <div class="col-md-1">
      <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">
        Category </button>

        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </div>
    </div>
    <div class="col-md-9"></div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width:400px">
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>
      <div class="col-md-4"><div class="card" style="width:400px">
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-4"><div class="card" style="width:400px">
        <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>


    </div>




  </div>

@endsection
