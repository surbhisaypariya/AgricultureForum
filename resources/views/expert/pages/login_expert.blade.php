<!DOCTYPE html>
<html lang="en">
<head>
	<title>Expert-Login</title>
	<link rel="stylesheet" href="expert/css/bootstrap.min.css">
	<link rel="stylesheet" href="expert/css/font-awesome.min.css">
</head>
<body background="expert/image/blur.jpg" style="background-repeat:no-repeat;height:100%;background-size:cover;">


	<div class="container">
		
		<div class="row" style="margin-top:150px;">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="background-color:white;">
				<img src="expert/image/user.png" style="align:center;margin-left:60px;">
				<form method="POST" action="{{ route('login_expert') }}">
					@csrf
					<div class="form-group">
						<label for="email" class="fa fa-user"> Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					</div>
					<div class="form-group">
						<label for="pwd" class="fa fa-lock"> Password:</label>
						<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
					</div>
					<button type="submit" class="btn btn-primary btn-lg" style="margin-left:100px;">Submit</button>
					<br><br>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>



	</div>
	<script src="expert/js/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="expert/js/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="expert/js/bootstrap.min.js"></script>
</body>
</html>