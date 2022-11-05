<?php
class comments{
	public function views(){
		$id = $_GET['id'];
		$connect= mysqli_connect('localhost','root','','ma');

		$select="SELECT * FROM comment_data WHERE reply_to='0' AND post_id='$id'";

		$data=mysqli_query($connect,$select);

		return $data;
	}
	public function views_reply($id){
		$connect= mysqli_connect('localhost','root','','ma');

		$select="SELECT * FROM comment_data WHERE reply_to='$id'";

		$data=mysqli_query($connect,$select);

		return $data;
	}
}









?>