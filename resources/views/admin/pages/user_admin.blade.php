
@extends('admin.layouts.app')

@section('title', 'User')

@section('content')


<div id="content-wrapper">

	<div id="content-wrapper">

		<div class="container-fluid">

			<h2>Number of users profile</h2>

			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Profile</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>John</td>
						<td><button class="btn btn-link" data-toggle="modal" data-target="#myModal">View</button></td>
					</tr>
				</tbody>
			</table>
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