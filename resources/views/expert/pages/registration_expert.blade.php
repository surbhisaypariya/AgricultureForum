@extends ('expert.layouts.app')
@section('title','Make Profile')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
       @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      
      <h2>Make a Profile</h2>
    <form action="{{route('registration_expert.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
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
            <input type="number" class="form-control" id="number" placeholder="Enter number" name="mobile_no">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="Category">Category:</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category" name="category">
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
            <input type="password"  id="password" class="form-control" name="password" placeholder="Enter password">
          </div>
           <div class="form-group">
            <label for="Password:">Re -Password:</label>
            <input type="password"  id="password" class="form-control" name="password_confirmation" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="Reset" class="btn btn-danger">Reset</button>
        </div>
        <div class="col-md-4" >
            <label for="photo" style="margin-left:50px;">Photo:</label>
            <img src="...." style="height:210px;width:240px;margin-left:50px;border-style:solid;border-color: red" id="output_image" ><br><br>
            <input type="file" name="photo" class="form-control-file" style="margin-left:50px;" onchange="preview_image(event)"> 
          </div>
      </div>
  </form></div>
    <div class="col-md-2"></div>
      </div>
    
  </div>
 <script>
    function preview_image(event) 
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('output_image');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>
@endsection