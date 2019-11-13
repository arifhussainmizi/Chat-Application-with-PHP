<?php 
	include("include/connection.php");

	if(isset($_POST['sign_up'])){
		$name=htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));

		$email=htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));


		$password=htmlentities(mysqli_real_escape_string($con, $_POST['user_password']));

		$country=htmlentities(mysqli_real_escape_string($con, $_POST['user_country']));
		$gender=htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
		$rand=rand(1,2);

		if($name==''){echo "<script>alart('We can not verify your name')</script>";}
		if(strlen($password)<8)
			{echo "<script>alart('Password minimum 8 characters')</script>";
			exit();
		}

		$check_email= "select * from users where user_email= '$email'";

		$run_email=mysqli_query($con, $check_email);
		$check=mysqli_num_rows($run_email);

		if($check==1){
			echo "<script>alert('Email already exist, plese another email')</script>";
			echo "<script>window.open('signUp.php','_self')</script>";
			exit();

		}

		if($rand==1){
			$profile_pic="images/profile1.png";

		}else if ($rand==2) {
			$profile_pic="images/profile2.png";
		}

		$insert= "insert into users (user_name, user_email, user_password, user_profile, user_country, user_gender ) values ('$name','$email','$password','$profile_pic','$country','$gender')";
		$query=mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Congratulations $name, your account has been created successfully.')</script>";
			echo "<script>window.open('singIn.php','_self')</script>";

		}
		else{
			echo "<script>alert('Registration failed, try again!.')</script>";
			echo "<script>window.open('signUp.php','_self')</script>";
		}

	}


 ?>