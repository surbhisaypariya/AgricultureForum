<!DOCTYPE html>
<html lang="en">
<head>
	<title>USER-Login</title>
	<link rel="stylesheet" href="user/css/bootstrap.min.css">
	<link rel="stylesheet" href="user/css/font-awesome.min.css">
</head>
<body background="user/image/blur.jpg" style="background-repeat:no-repeat;height:100%;background-size:cover;">
	<div class="container">
		
		<div class="row" style="margin-top:120px;">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="background-color:white;">
				<span>
					<!-- <img src="user/image/user.png" style="align:center;margin-left:60px;"> -->
					<h2>
						<center>
							Admin Login
						</center>
					</h2>
				</span>

				<form method="POST" >
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
	<script src="user/js/jquery.min.js"></script>
	Popper JS
	<script src="user/js/popper.min.js"></script>
	<!-- Latest compiled JavaScript  -->
	<script src="user/js/bootstrap.min.js"></script>
</body>
</html>