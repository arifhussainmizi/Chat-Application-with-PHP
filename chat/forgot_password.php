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
				<h2>Forgot Password</h2>
				<p>MyChat</p>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required >
			</div>
			<div class="form-group">
				<label>Best Friend Name</label>
				<input type="text" class="form-control" name="bf" placeholder="Someone.." autocomplete="off" required >
			</div>
			

			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
			</div>
			
		
		</form>
		<div class="text-center small" style="color: #674288;">Back To Sign In?<a href="signin.php">Click Here</a></div>
	</div>

	<?php  

			session_start();

			include ("include/connection.php");

				if(isset($_POST['submit'])){

					$email= htmlentities(mysqli_real_escape_string($con, $_POST['email']));
					$recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['bf']));

					$select_user = "select * from users where user_email = '$email' AND forgotten_answer = '$recovery_account'";

					$query = mysqli_query ($con, $select_user);

					$check_user = mysqli_num_rows ($query);

					if($check_user == 1){

						$_SESSION['user_email']= $email;

						echo "<script>window.open('create_password.php', '_self')</script>";
				}else {
					echo "<script>alert('Your email or bestfriend name is incorrect.')</script>";
					echo " <script>window.open ('forgot_password.php', '_self')</script> ";
			}
			}

	  ?>

</body>
</html>