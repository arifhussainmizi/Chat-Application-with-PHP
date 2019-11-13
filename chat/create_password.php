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
				<h2>Create New Password</h2>
				<p>MyChat</p>
			</div>
			
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" class="form-control" name="pass1" placeholder="Password" autocomplete="off" required >
			</div>

			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="pass2" placeholder="Confirm Password" autocomplete="off" required >
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
			</div>
			
		
		</form>
	</div>
	<?php 

		session_start();
		include ("include/connection.php");

		if(isset($_POST['change'])){
			$user =  $_SESSION['user_email'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];

			
			if($pass1 != $pass2){
				echo "
					<div class='alert alert-danger'>
						<strong>Your New password didn't match with confirm password</strong>
					</div>
				";
			}

			if($pass1 <9 AND  $pass2 <9){
				echo "<div class='alert alert-danger'>
						<strong>Use 9 or more characters</strong>
					</div>
				";
			}
			
			if($pass1 == $pass2){

				$update_pass = mysqli_query ($con, "UPDATE users SET user_password='$pass1' WHERE user_email= '$user'");

				session_destroy();

				echo "<script>alert('Go ahead and Sign In.')</script>";
					echo " <script>window.open ('singIn.php', '_self')</script> ";
		}
	}
	 ?>

</body>
</html>