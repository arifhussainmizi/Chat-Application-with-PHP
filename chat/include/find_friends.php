<!DOCTYPE html>
<?php 
	session_start();
	include("find_friends_function.php");


	if(!isset($_SESSION['user_email'])){
		header("Location:singIn.php");
	}
	else {
 ?>
<html>
<head>
	<title>Search For Friends</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
	
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	
	
</head>
<body>
	<nav class="navbar-brand" href="#">
		<a class="navbar-brand" href="#">
			<?php 
				$user=$_SESSION['user_email'];
				$get_user="select* from users where user_email='$user'";	
				$run_user=mysqli_query($con,$get_user);
				$row = mysqli_fetch_array($run_user);

				$user_name = $row['user_name'];
				echo "<a class='navbar-brand' href='../home.php?user_name=$user_name'>MyChat</a> ";
					?>
				
		</a>
		<ul class="navbar-nav" style="margin-top: 14px;

margin-left: -16px;">
					<li style="list-style: none;"><a style=" text-decoration: none; font-size: 20px; " href="../account_settings.php">Settings</a></li>
					
				</ul>
	</nav><br>
	<div class="row">
		<div class="col-sm-4">
			
		</div>
		<div class="col-sm-4">
			<form class="Search_form" action="">
				<input type="text" name="search_query" placeholder="Search Friends.." autocomplete="off" required>
				<button class="btn" type="submit" name="search_btn">Search</button>
			</form>
		</div>
		<div class="col-sm-4"> 

		</div>
	</div><br><br>
	<?php 
	 search_user();

	 ?>
</body>
</html>
<?php }  ?>