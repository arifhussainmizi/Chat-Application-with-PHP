<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Fill out this form and start chating with your friends....</p>
			</div>
			<div class="form-group">
				<label>User Name</label>
				<input type="text" class="form-control" name="user_name" placeholder="Example: Ahsan432" autocomplete="off" required >
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required >
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_password" placeholder="Password" autocomplete="off" required >
			</div>

			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" required>
					<option disabled="">Select a country</option>
					<option>Afganisthan</option>
					<option>Bangladesh</option>
					<option>Canada</option>
					<option>Denmark</option>
					<option>Egypt</option>
					<option>Finland</option>
					<option>Germany</option>
					<option>Hong Kong</option>
					<option>India</option>
					<option>Japan</option>
					<option>Korea</option>
					<option>Lous</option>
				</select>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">Select your gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Others</option>
			
				</select>
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required="">I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>
			

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			<?php include("signup_user.php");  ?> 
		
		</form>
		<div class="text-center small" style="color: #674288;">Already have an account?<a href="singIn.php"> Sign In Here</a></div>
	</div>

</body>
</html>