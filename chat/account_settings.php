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
	<title>Account Settings</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" --->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script---->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	
	
</head>
<body>
	<div class="row">
		<div class="col-sm-2"></div>
		<?php  
				$user=$_SESSION['user_email'];
				$get_user= "select* from users where user_email='$user'";
				$run_user= mysqli_query($con, $get_user);
				$row= mysqli_fetch_array($run_user);

				$user_name=$row['user_name'];
				$user_password= $row['user_password'];
				$user_email= $row['user_email'];
				$user_profile=$row['user_profile'];
				$user_country= $row['user_country'];
				$user_gender=$row['user_gender'];

		  ?>

		  	<div class="col-sm-8">
		  		<form action="" method="post" enctype="multipart/from-data">

		  			<table class="table table-bordered table-hover">
		  				<tr align="center">
		  					<td colspan="6" class="active">
		  						<h2>Change Acttount Settings</h2>
		  					</td>
		  				</tr>
		  				<tr>
		  					<td style="font-weight: bold">Change Your username</td>
		  					<td>
		  						<input type="text" name="u_name" class="from-control" required value=" <?php echo $user_name; ?>">
		  					</td>
		  				</tr>

		  				<tr><td></td>
		  					<td><a class="btn btn-default" style="text-decoration: none; font-size:15px;  " href="upload.php"><i class="fa fa-user" aria-hidden="true"></i>Change Profile</a></td></tr>

		  					<tr>
		  					<td style="font-weight: bold"> Change Your Email </td>
		  					<td>
		  						<input type="text" name="u_email" class="from-control" required value="<?php echo $user_email; ?>">
		  					</td>
		  				</tr>

		  				<tr>
		  					<td style="font-weight: bold;">Country</td>
		  					<td>
		  						<select class="from-control" name="u_country">
		  							<option><?php echo "$user_country";?></option>
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
		  					</td>
		  				</tr>
		  				<tr>
		  					<td style="font-weight: bold;">Change Gender</td>
		  					<td>
		  						<select class="from-control" name="u_gender">
		  							<option><?php echo "$user_gender";?></option>
		  							
									<option>Male</option>
									<option>Female</option>
									<option>Others</option>
		  						</select>
		  					</td>
		  				</tr>
		  				<tr>
		  					<td style="font-weight: bold;">Fogotten Password</td>
		  					<td >
		  						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"> Forgotten Password</button>

		  						<div id="myModal" class="modal fade" role="dialog">

		  							<div class="modal-dialog">
		  								<div class="modal-content">
		  									<div class="modal-header">
		  									<button type="button" class="close" data-dismiss="modal">&times;</button>
		  									</div>
		  									<div class="modal-body"> 
		  										<form action="recovery.php?id=<?php echo $user_id ?>" method="post" id="f">
		  										<strong>What is your school Best Friend Name?</strong>
		  										<textarea class="from-control" cols="78" rows="4" name="content" placeholder="Someone"></textarea>
		  										<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width: 100px;"><br><br>
		  										<pre>Answer the above question we will ask you this question if you forgot your <br>Password.</pre>
		  										<br><br>
		  									</form>
		  								</div>
		  								<?php 

		  									if(isset($_POST['sub'])){

		  										$bfn= htmlentities($_POST['content']);

		  										if($bfn == ''){
		  											echo "<script>alert('Please Enter Something.' )</script>";
		  											echo "<script>window.open('account_settings.php', '_self')</script>";
		  											exit();
		  										}
		  										else{
		  											$update= "update users set forgotten_answer='$bfn' where user_email='$user'";
		  											$run=mysqli_query($con, $update);
		  											if($run)
		  											{
		  												echo "<script>alert('Working...' )</script>";
		  												echo "<script>window.open('account_settings.php', '_self')</script>";
		  											

		  											}else{
		  												echo "<script>alert('Error While updating Information.' )</script>";
		  											echo "<script>window.open('account_settings.php', '_self')</script>";
		  											
		  											}
		  										}
		  									}
		  								 ?>
		  								 <div class="modal-footer">
		  								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  							</div>

		  							</div>
		  							
		  						</div>
		  					</div>
		  				</div>
		  				

		  					
		  				</tr>

		  				<tr><td></td><td><a class="btn btn-default" style="text-decoration: none; font-size: 15px;"   href="change_password.php"><i class="fa fa-key fa-fw" arial-hidden="true"></i>Change Password</a></td></tr>

		  				<tr align="center">
		  					<td colspan="6">
		  						<input type="submit" name="update" class="btn btn-info">
		  					</td>
		  				</tr>

		  			</table>
		  			
		  		</form>
		  		<?php 

		  			if(isset($_POST['update'])){
		  				$user_name=htmlentities($_POST['u_name']);
		  				$email =htmlentities($_POST['u_email']);
		  				$u_country=htmlentities($_POST['u_country']);
		  				$u_gender=htmlentities($_POST['u_gender']);

		  				$update="update users set user_name='$user_name',user_email='$email', user_country='$u_country',user_gender='$u_gender' where user_email='$user'";
		  				$run= mysqli_query($con, $update);

		  				if($run){
		  					echo "<script>window.open('account_settings.php', '_self')</script>";


		  				}
		  			}
		  		 ?>
		  	</div>

		  	<div class="col-sm-2">
		  		
		  	</div>

	</div>

</body>
</html>
<?php } ?>