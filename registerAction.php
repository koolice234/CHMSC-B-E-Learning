<?php 
	include('config.php');
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$fullName = $_POST['fullName'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];
		$type = $_POST['type'];
		if($password == $passwordConfirm){
			mysqli_query($connect, "INSERT INTO users(user_username, user_password, user_type,user_fullName)
			VALUES ('$username','$password','$type','$fullName')")or die(mysqli_error($connect));
			
			if($type=='student'){
				echo "<script>alert('Thank you for registering. You can login now');location.href='index.php';</script>";
			}
			if($type=='teacher'){
				$result = $connect->query("SELECT MAX(user_ID) FROM users ORDER BY user_ID DESC");
				$row = $result->fetch_assoc();
				$id =$row['MAX(user_ID)'];
				mysqli_query($connect, "INSERT INTO teachers(teacher_name, teacher_userID)VALUES ('$fullName','$id')")or die(mysqli_error($connect));
				echo "<script>alert('Thank you for registering. Please wait for the Confirmation of the Admin');
				location.href='index.php';</script>";
			}
			
		}else{
			echo "<script>alert('Password is not the same with confirm password');location.href='register.php';</script>";
		}

	}
?>