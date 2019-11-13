<!DOCTYPE html>
<?php 
	session_start();
	include("include/connection.php");
	include("include/header.php");

	if(!isset($_SESSION['user_email'])){
		header("Location:singIn.php");
	}
	else {
 ?>
<html lang="en">
<head>
	<title>Change Profile Picture</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" --->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script---->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	
	
</head>

<style>
	body {
		overflow-x: hidden;
	}

</style>


<body>
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<div class="col-sm-8">
			<form action="" method="post" enctype="multipart/form-data">
				<table class="table table-bordered table-hover">
		  				<tr align="center">
		  					<td colspan="6" class="active">
		  						<h2>Change password</h2>
		  					</td>
		  				</tr>
		  				<tr>
		  					<td style="font-weight: bold">Current Password</td>
		  					<td>
		  						<input type="password" name="current_password" id="mypass" class="from-control" required placeholder="Current password" autocomplete="off">
		  					</td>
		  				</tr>
		  				<tr>
		  					<td style="font-weight: bold">New Password</td>
		  					<td>
		  						<input type="password" name="user_password1" id="mypass" class="from-control" required placeholder="New password">
		  					</td>
		  				</tr>
		  				<tr>
		  					<td style="font-weight: bold">Confirm Password</td>
		  					<td>
		  						<input type="password" name="user_password2" id="mypass" class="from-control" required placeholder="Confirm_password">
		  					</td>
		  				</tr>
		  				<tr align="center">
		  					<td colspan="6">
		  						<input type="submit" name="change" value="change" class="btn btn-info">
		  					</td>
		  				</tr>
		  		</table>
				
			</form>
			<?php 
				if(isset($_POST['change'])){
				$c_pass= $_POST['current_password'];
				$pass1= $_POST['user_password1'];
				$pass2= $_POST['user_password2'];

				$user=$_SESSION['user_email'];
				$get_user= "select* from users where user_email='$user'";
				$run_user= mysqli_query($con, $get_user);
				$row= mysqli_fetch_array($run_user);

				$user_password = $row['user_password'];

				if($c_pass !=$user_password){
				echo "
					<div class='alert alert-danger'>
						<strong>Your Old password didn't match.</strong>
					</div>";
			}

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
			if($pass1== $pass2 AND $c_pass == $user_password){

				$update_pass = mysqli_query ($con, "UPDATE users SET user_password='$pass1' WHERE user_email= '$user'");

				echo "<div class='alert alert-danger'>
						<strong>Your password is changed.</strong>
					</div>
				";
		}

			
		 
			}


			  ?>
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
</body>
</html>
<?php  }  ?>