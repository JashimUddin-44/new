<?php
class unpublish{
	public function data(){
		$id=$_GET['id'];
		$connect= mysqli_connect('localhost','root','','ma');

		$update="UPDATE add_category_data SET publicaton_status='1' WHERE id='$id'";

		$data=mysqli_query($connect,$update);

		if($data){
			/*echo '<script type="text/javascript">
	window.location = "manage_category.php";
</script>';*/
			?>
<script type="text/javascript">
	window.location = "manage_category.php";
</script>
<?php
		}
	}
}
$obj= new unpublish;
$obj->data();






?>