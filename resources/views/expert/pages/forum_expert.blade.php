@extends ('expert.layouts.app')
@section('title','forum')
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
    <div class="col-md-10">
      <b><label>Questions:</label></b> <br>
      <a>dmfsiidfuusndl;knsl;kdcm</a>
    </div>
    <div class="col-md-2">
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
      Answer
    </button>
  </div>
</div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Answer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <textarea class="form-control"></textarea>
<!--        <label for="image">Image:</label>
       <input type="file" name="image" class="form-control-file" id="image"> -->
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
    </div>

  </div>
</div>
</div><br><br>
<hr class="hr1">

<p>ndf;kaniiuvbeiuanvknvvbdunv</p>
<p>Answer</p>

<button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Modify</button>
<button class="btn btn-danger">Delete</button>

<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modify</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <textarea class="form-control"></textarea>
       <label for="image">Image:</label>
       <input type="file" name="image" class="form-control-file" id="image">
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
    </div>

  </div>
</div>

</div>

@endsection