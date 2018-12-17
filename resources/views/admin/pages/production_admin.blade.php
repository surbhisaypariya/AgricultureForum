
@extends('admin.layouts.app')

@section('title', 'Production')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('dashboard_admin.index') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <?php echo ucfirst(explode(".",Request::route()->getName())[0]); ?>
      </li>
    </ol>

    <!-- Page Content -->
    <h1>Production Awareness Data</h1>
    <hr>




    <div class="row">


      <div  class="col-md-6">
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalProduct">
          Add production data
        </button>
        <div class="modal" id="modalProduct">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header primary">
                <h4 class="modal-title">Add Production data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <form method="POST" action="{{ route('production_admin.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Modal body -->
                <div class="modal-body">
                  
                  <div class="form-group"> 
                    <label for="title"> Title :- </label>
                    <input type="text" class="form-control" name="title">
                  </div>

                  <div class="form-group"> 
                    <input type="file" name="imageInput" id="imageInput">
                  </div>

                  <div class="form-group"> 
                    <label for="description">Description:</label>
                    <textarea rows="3" class="form-control" name="description"></textarea>
                  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>


    <br>
    <div class="row">
      <div class="col-md-6">
        <input type="file" name="imageInput" id="imageInput">
        <img id="imageView" src="#" alt="your image" />
      </div>
      <div class="col-md-6">
        <textarea rows="5" style="height:150px;width:450px;">Description</textarea>
      </div>
    </div>

  </div>

  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->


<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
@endsection