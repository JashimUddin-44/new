<?php
class update{
	public function data(){
		$connect= mysqli_connect('localhost','root','','ma');

		$old_image = $_POST['old_image'];

		if($_FILES['image']['name']!=""){
			$old_image = $_FILES['image']['name'];
			$file_name=$_FILES['image']['name'];
			$tmp_name=$_FILES['image']['tmp_name'];
			move_uploaded_file($tmp_name, '../login/addmin/upload/'.$file_name);
		}
		

		
		$update="UPDATE add_category_data SET title='".$_POST['tl']."',short_description='".$_POST['sd']."',publicaton_status='".$_POST['ps']."',image='".$old_image."' WHERE id='".$_POST['blog_id']."'";

		mysqli_query($connect,$update);


	}
}






?>