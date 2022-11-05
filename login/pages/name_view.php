<?php
class name{
	public function view(){
		$connect= mysqli_connect('localhost','root','','ma');

		$select="SELECT * FROM password_data";

		$da=mysqli_query($connect,$select);

		$data=mysqli_fetch_assoc($da);

		return $data;
	}
}






?>