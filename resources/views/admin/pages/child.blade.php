@extends('admin.layouts.app')

@section('title', 'Admin')

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
					Add Category
				</button>
				<div class="modal" id="modalProduct">
					<div class="modal-dialog">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h4 class="modal-title">Add Category</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<form>
									<div class="form-group"> 
										<input type="text" name="category" id="category" class="form-control" placeholder="Enter category name">
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
		</div><br><br>

		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-table"></i>
			Experts request</div>
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
							<tr>
								<td width="80%"></td>
								<td>
									<button class="btn btn-danger">
										<i class="fas fa-trash-alt"></i>
										Delete
									</button>
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modelcategoryedit">
										<i class="fas fa-check-circle"></i>
										Edit
									</button>

								</td>

							</tr>
						</tbody>
					</table>

					<div class="modal" id="modelcategoryedit">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Edit Category</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<form>
										<div class="form-group"> 
											<input type="text" name="category" id="category" class="form-control" placeholder="Enter category name">
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