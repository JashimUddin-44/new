<?php
class delete{
	public function data(){
		$id=$_GET['id'];
		$connect=mysqli_connect('localhost','root','','ma');

		$delete="DELETE FROM add_category_data WHERE id='$id'";

		$delete=mysqli_query($connect,$delete);

		if($delete){
		?>
<script type="text/javascript">
	window.location = "manage_category.php";
</script>
<?php
		}
	}
}

$op= new delete;
$op->data();



?>