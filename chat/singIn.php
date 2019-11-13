<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign In</h2>
				<p>Login to Chat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required >
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required >
			</div>
			
			<div class="small">Forgot password? <a href="forgot_password.php">Cick Here</a></div><br>

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
			</div>
			<?php include("signin_user.php");  ?>
		
		</form>
		<div class="text-center small" style="color: #674288;">Don't have an account?<a href="signup.php">Create account</a></div>
	</div>

</body>
</html>