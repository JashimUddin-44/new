<?php
class single{
	public function view(){
		$id=$_GET['id'];
		$connect= mysqli_connect('localhost','root','','ma');

		$select="SELECT * FROM add_category_data WHERE id='$id'";

		$da=mysqli_query($connect,$select);

		$data=mysqli_fetch_assoc($da);

		return $data;
	}
}






?>