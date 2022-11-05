<?Php
include "manage_view.php";
$obj= new manage;
$res=$obj->view();



?>
<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Title</th>
								  <th>Short description</th>
								  <th>Publication status</th>
								  <th>Image</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	<?php
						  	while($result=mysqli_fetch_array($res)){

						  	?>
							<tr>
								<td><?php echo $result['title'] ?></td>
								<td><?php echo $result['short_description'] ?></td>
								<td class="center"><?php echo $result['publicaton_status'] ?></td>
								<td class="center"><img src="../login/addmin/upload/<?php echo $result['image'] ?>" alt=""  style="height: 80px;"></td>
								<td class="center">
								    <?php
								    if($result['publicaton_status']==1){

								    ?>
									<span class="label label-success">Publish</span>
								<?php }
								 else if($result['publicaton_status']==0){
								?>
									<span class="label label-success">Upublish</span>

								<?php } ?>
								</td>
								<td class="center">
									<?php
									if($result['publicaton_status']==1){

									?>
									<a class="btn btn-success" href="publish.php?id=<?php echo $result['id'] ?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
								<?php }
								else if($result['publicaton_status']==0){

									?>
									<a class="btn btn-success" href="unpublish.php?id=<?php echo $result['id'] ?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
								<?php } ?>


									<a class="btn btn-info" href="edit.php?id=<?php echo $result['id'] ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="delete.php?id=<?php echo $result['id'] ?>">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

			