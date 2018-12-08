@extends ('expert.layouts.app')
@section('title','Make Profile')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h2>Make a Profile</h2>
    <form action="/action_page.php"> 
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
          </div>

          <div class="form-group">
            <label for="Address">Address:</label>
            <textarea class="form-control" id="address" placeholder="Enter address" name="address"></textarea>
          </div>

          <div class="form-group">
            <label for="Mobile no">Mobile no:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="Category">Category:</label>
            <input type="category" class="form-control" id="category" placeholder="Enter category" name="category">
          </div>
          <div class="form-group">
            <label for="Degree certificate">Degree certificate:</label>
            <input type="file"  id="degree_certificate"  name="degree_certificate">
          </div>
          <div class="form-group">
            <label for="Username">Username:</label>
            <input type="text"  id="username" class="form-control" name="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="Password:">Password:</label>
            <input type="text"  id="password" class="form-control" name="password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="Reset" class="btn btn-danger">Reset</button>
        </div>
        <div class="col-md-4" >
          <label for="photo" style="margin-left:50px;">Photo:</label>
          <img src="...." style="height:210px;width:240px;margin-left:50px;border-style:solid;border-color: red" ><br><br>
          <input type="file" name="photo" class="form-control-file" id="photo" style="margin-left:50px;" > 
        </div>
      </div>
  </form></div>
    <div class="col-md-2"></div>
      </div>
    
  </div>

@endsection