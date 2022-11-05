<?php
class publish{
	public function publish_data(){
		$id=$_GET['id'];
		$connect= mysqli_connect('localhost','root','','ma');

		$update="UPDATE add_category_data SET publicaton_status='0' WHERE id='$id'";

		$data=mysqli_query($connect,$update);

		if($data){
			?>
<script type="text/javascript">
	window.location = "manage_category.php";
</script>
<?php
		}
	}
}
$obj= new publish;
$obj->publish_data();






?>