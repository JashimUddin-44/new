<?php
include "content_view.php";
$obj= new content;
$res=$obj->view();










?>

<div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
					 <div class="content-grid-head">
						 <h3>POST OF THE DAY</h3>
						 <h4>July 24, 2014,Posted by: <a href="#">Admin</a></h4>
						 <div class="clearfix"></div>
					 </div>
					 <div class="content-grid-info">
					 	<?php
					 	while($result=mysqli_fetch_array($res)){
					 		if($result['publicaton_status']==1){

					 	?>
						 <h3><a href="single.html"><?php echo $result['title'] ?></a></h3>
						 <p><?php echo $result['short_description'] ?></p>
						 <img src="login/addmin/upload/<?php echo $result['image'] ?>" alt="" width="100%" height="100%"/>
						 <a class="bttn" href="single.php?id=<?php echo $result['id'] ?>">MORE</a>
						<?php } } ?>
					</div>
				 </div>
				 
				 				 
				 <div class="pages">
					 <ul>
						 <li class="active"><a href="#">1</a></li>
						 <li><a href="#">2</a></li>
						 <li><a href="#">3</a></li>
						 <li><a href="#">4</a></li>
						 <li><a href="#">5</a></li>
						 <li><a href="#">6</a></li>
						 <li><a href="#">Previous</a></li>
						 <li><a href="#">Next</a></li>
					 </ul>
				 </div>				 
			 </div>
			 
			 <div class="col-md-4 content-main-right">
				 <div class="search">
						 <h3>SEARCH HERE</h3>
						<form>
							<input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
							<input type="submit" value="">
						</form>
				 </div>
				 <div class="categories">
					 <h3>CATEGORIES</h3>
					 <li class="active"><a href="#">Donec quis dui at dolor tempor</a></li>
					 <li><a href="#">Vestibulum commodo felis quis tort</a></li>
					 <li><a href="#">Fusce pellentesque suscipit</a></li>
				 </div>
				 <div class="archives">
					 <h3>ARCHIVES</h3>
					 <li class="active"><a href="#">July 2014</a></li>
					 <li><a href="#">June 2014</a></li>
					 <li><a href="#">May 2014</a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>