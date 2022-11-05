<?php
class contact{
	public function data($nm,$el,$pn,$mg){

		$connect= mysqli_connect('localhost','root','','ma');
		$insert="INSERT INTO contact_data(name,email,phone,message) VALUES('$nm','$el','$pn','$mg')";

		mysqli_query($connect,$insert);
	


		
	}
}






?>