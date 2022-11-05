<?php
class login{
	public function data($data){
		$connect= mysqli_connect('localhost','root','','ma');

		$email=$data['email'];
		$password=md5($data['password']);

		$select="SELECT* FROM password_data WHERE email='$email' AND password='$password'";

		$da=mysqli_query($connect,$select);

		$data=mysqli_fetch_assoc($da);

		if($data){
			header('location:index2.php');

			session_start();
			$_SESSION['name']=$data['name'];
			$_SESSION['id']=$data['id'];
		}
		
	}
}






?>