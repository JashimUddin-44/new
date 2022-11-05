<?php
class comment{
	public function data($nm=NULL,$el=NULL,$pn=NULL,$mg,$r_to='0',$p_id='0'){
		$connect= mysqli_connect('localhost','root','','ma');

		$insert="INSERT INTO comment_data(name,email,phone,message,reply_to,post_id) VALUES('$nm','$el','$pn','$mg','$r_to','$p_id')";

        mysqli_query($connect,$insert);


		
	}
}






?>