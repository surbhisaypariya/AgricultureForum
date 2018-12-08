
@extends('admin.layouts.app')

@section('title', 'Production')

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
                  <div class="modal-header">
                    <h4 class="modal-title">Add Production data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form>
                      <div class="form-group"> 
                          <input type="file" name="imageInput" id="imageInput">
                          <br><br>
                          <label for="description">Description:</label>
                          <textarea style="height:150px;width:250px;">
                      
                          </textarea>
                      </div>
                    </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-warning" data-dismiss="modal">Add</button>
                  </div>

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

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2018</span>
          </div>
        </div>
      </footer>

    </div>
<!-- /.content-wrapper -->


<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
@endsection