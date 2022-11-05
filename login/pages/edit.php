<?php
class edit{
	public function data(){
		$id=$_GET['id'];
		$connect= mysqli_connect('localhost','root','','ma');

		$edit_data="SELECT * FROM add_category_data WHERE id='$id' ";

		$da=mysqli_query($connect,$edit_data);

		$data=mysqli_fetch_assoc($da);

		return $data;
	}
}
include "update.php";
$obj=  new update;
if (!empty($_POST)) {
	$obj->data();
echo '
<script type="text/javascript">
	window.location = "manage_category.php";
</script>';
}





$op= new edit;
$res=$op->data();

?>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Title</label>
							  <div class="controls">
								<input type="text" name="tl" value="<?php echo $res['title'] ?>" >
							  </div>
							</div>
							<div class="control-group">
							  
							  <div class="controls">
								<input type="hidden" name="blog_id" value="<?php echo $res['id'] ?>" >
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Short Description</label>
							  <div class="controls">
								<textarea name="sd" class="cleditor" id="textarea2" rows="3"><?php echo $res['short_description'] ?></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Publicatio Status</label>
							  <div class="controls">
								<select name="ps">
									<option value="1">publish</option>
									<option value="0">unpublish</option>
								</select>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name="old_image" type="hidden" value="<?php echo $res['image'] ?>">
								<input class="input-file uniform_on" id="fileInput" name="image" type="file"><img src="../login/addmin/upload/<?php echo $res['image'] ?>" alt="" height="40px" width="40%">
							  </div>
							</div>          
							<div class="form-actions">
							  <button type="submit" name="btn" class="btn btn-primary">Update </button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  