<?php
session_start();
if(!empty($_POST)){
	$OTP = $_POST['OTP'];
	$password = $_POST['new_password'];
	$con_pass = $_POST['conform_password'];
	$email = $_GET['email'];

	if ($OTP!=$_SESSION['otp']) {
		echo "OTP Incorrect..";
	}elseif ($password!=$con_pass) {
		echo "Confirm Password is not matched.";
	}else{
		$connect= mysqli_connect('localhost','root','','ma');
		$md5pass = md5($password);
		$update="UPDATE password_data SET password='$md5pass' WHERE email='$email'";


		mysqli_query($connect,$update);

		echo "password change success";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
</head>
<body>
	
	<form action="" method="post">
		<label for="OTP">OTP</label>
		<input type="number" name="OTP" id="OTP" placeholder="enter otp number">
		<label for="password">New Password</label>
		<input type="password" name="new_password" id="password" placeholder="enter new password">
		<label for="passwore">Conform Password</label>
		<input type="password" name="conform_password" id="password" placeholder="enter conform password">
		<button type="submit">Save</button>
	</form>

</body>
</html>