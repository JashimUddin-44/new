<?php
class email{
	public function chek($email){
		$connect= mysqli_connect('localhost','root','','ma');
		$select="SELECT* FROM password_data WHERE email='$email'";

		$da=mysqli_query($connect,$select);

		$data=mysqli_fetch_assoc($da);

		if($data){
			header('location:otp.php?email='.$email);
			session_start();
			//Email will sent to use......with otp
			$_SESSION['otp'] = '12345';	
		}else{
			echo "Email is not valid!";
		}
	}
}








?>