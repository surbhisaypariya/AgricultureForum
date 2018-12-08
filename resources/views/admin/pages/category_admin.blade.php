
@extends('admin.layouts.app')

@section('title', 'Category')

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
    <h1>Category</h1>
    <hr>


    @include('widgets.error') 
    @include('widgets.success') 

    <div class="card mb-3">
      <div class="card-header">
        <span class="" style="font-size: 20px;">
          <i class="fas fa-table"></i>
          Category
        </span>
        <span class="float-right">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalProduct">
            Add Category
          </button>
        </span>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Category Name</th>
                <th colspan="2" class="text-center">Action</th>
              </tr>
            </thead>


            <tbody>
              @foreach($categories as $category)
              <tr>
                <td hidden="" ></td>
                <td width="80%" >{{$category->name}}</td>
                <td>
                  <button class="edit btn btn-success" data-edit-id="{{$category->id}}" data-edit-name="{{ $category->name }}">
                    <i class="fas fa-check-circle"></i>
                    Edit
                  </button>
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

  <!-- Add Model -->
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

  <!-- Edit Model -->
  <div class="modal" id="editModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="POST" action="" id="editform" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="_method" value="PATCH">

          <!-- Modal body -->
          <div class="modal-body">
            <div class="form-group"> 
            <input type="text" name="name" id="name" class="form-control">
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-warning">Update</button>
          </div>
        </form>

      </div>
    </div>
  </div>



</div>
<!-- /.content-wrapper -->


<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
@endsection

@section('script')
<script type="text/javascript">
  $(document).on('click', '.edit', function () {
    var id = $(this).data("edit-id");
    var name = $(this).data("edit-name");

    $('#editform #name').val(name);
    $('#editform').attr('action', '/category_admin/' + id);
    $('#editModal').modal('show');
  });
</script>
@endsection
