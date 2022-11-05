<?php
class manage{
	public function view(){
		$connect= mysqli_connect('localhost','root','','ma');

		$select="SELECT * FROM add_category_data";

		$data=mysqli_query($connect,$select);

		return $data;
	}
}






?>