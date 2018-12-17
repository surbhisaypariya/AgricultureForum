
@extends('admin.layouts.app')

@section('title', 'User')

@section('content')


<div id="content-wrapper">
	<div class="container-fluid">

		<h2>Number of users profile</h2>

		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Profile</th>
					<th>Decide</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>John</td>
					<td><button class="btn btn-link" data-toggle="modal" data-target="#myModal">View</button></td>
					<td>
						<form action="{{ route('update_user',[1]) }}" method="POST">
							@csrf

							<button class="btn btn-primary" >Expert</button>
						</form>
						<button class="btn btn-primary">User</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
@endsection