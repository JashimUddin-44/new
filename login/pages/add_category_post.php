<?php
class add{
	public function category($tl,$sd,$ps){
		$connect= mysqli_connect('localhost','root','','ma');

		$file_name=$_FILES['image']['name'];
		$file_type=$_FILES['image']['type'];
		$file_error=$_FILES['image']['error'];
		$tmp_name=$_FILES['image']['tmp_name'];
		$file_size=$_FILES['image']['size'];
		$ext=pathinfo($file_name,PATHINFO_EXTENSION);


		if($ext==='png' or $ext==='jpg'){
			if(move_uploaded_file($tmp_name, '../login/addmin/upload/'.$file_name)){
				if($file_size<1500000){
					

					$insert="INSERT INTO add_category_data(title,short_description,publicaton_status,image) VALUES('$tl','$sd','$ps','$file_name')";

		        mysqli_query($connect,$insert);
				}
				else{
					echo "not image";
				}
			}
		}

		


	}
}







?>