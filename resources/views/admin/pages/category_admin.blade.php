
@extends('admin.layouts.app')

@section('title', 'Category')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Dashboard</a>
      </li>
    </ol>

    <!-- Page Content -->
    <h1>Category</h1>
    <hr>




    <div class="row">
      <div  class="col-md-6">
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalProduct">
          Add Category
        </button>
        <div class="modal" id="modalProduct">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="POST" action="{{ route('category_admin.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Add Category</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <div class="form-group"> 
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name">
                  </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-warning">Add</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div><br><br>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      Category</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Category Name</th>
                <th>Request</th>
              </tr>
            </thead>


            <tbody>
             @foreach($categories as $category)
             <tr>
              <td width="80%">{{$category->name}}</td>
              <td>
                <a href="{{ $category->id }}" class="btn btn-success" >
                  <i class="fas fa-check-circle"></i>
                  Edit
                </a>
              </td>
                <td>
                <form method="post" action="/category_admin/{{$category->id}}">
                  @csrf
                  @method("DELETE")
                  <button type="submit" name="delete" value="DELETE" class="btn btn-danger" >
                    <i class="fas fa-trash-alt"></i>
                    Delete
               </button>
                </form>
              </td>
            </tr>
            @endforeach



          </tbody>
        </table>


      </div>
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