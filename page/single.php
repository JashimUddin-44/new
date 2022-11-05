<?php
session_start();

include "comment_view.php";
include "comment_post.php";
include "single_view.php";


$ori= new comment;
if(!empty($_POST) && isset($_POST['r_to'])){
$ori->data(NULL,NULL,NULL,$_POST['mg'],$_POST['r_to'])??NULL;
}

if(!empty($_POST) && isset($_POST['nm'])){
$ori->data($_POST['nm'],$_POST['el'],$_POST['pn'],$_POST['mg'],'0',$_POST['p_id']);
}


$obj= new single;
$valu=$obj->view();

$oop= new comments;
$res=$oop->views();



?>
<div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
					 <div class="content-grid-head">
						 <h3>POST OF THE DAY</h3>
						 <h4>July 24, 2014,Posted by: <a href="#">Admin</a></h4>
						 <div class="clearfix"></div>
					 </div>
					 <div class="content-grid-single">
						 <h3><?php echo $valu['title'] ?></h3>
						 <span><?php echo $valu['short_description'] ?></span>
						 <img class="single-pic" src="login/addmin/upload/<?php echo $valu['image'] ?>" alt=""/>
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						 Nullam a efficitur odio, ac maximus lorem. Nullam aliquam fermentum lectus ut sagittis. Sed pulvinar sed ligula gravida condimentum. Proin eleifend vestibulum tortor, ut pellentesque lorem tempor a. Nunc pharetra lacus at laoreet suscipit. Aliquam tempor mattis sagittis. Mauris viverra mi quis risus molestie placerat. Sed accumsan vestibulum fringilla. Etiam dapibus tellus ac eros placerat, at aliquam arcu lobortis. Vestibulum sollicitudin mauris dui, a tempor metus lacinia sed. Nam a auctor purus, nec rutrum ipsum.
						 Maecenas lacus ex, finibus non tempor at, ultrices id sem. Suspendisse et magna et tellus facilisis lacinia at et diam. Fusce finibus ullamcorper ligula non tristique. Nulla facilisi. Donec ultricies nisi vel quam venenatis efficitur. Praesent porta risus arcu, at egestas ante accumsan eu. Phasellus et lacus quis lacus imperdiet fermentum eu a enim. Praesent non lorem rhoncus, cursus leo nec, pellentesque dui.</p>
						 
						 <div class="content-form">
							 <h3>Leave a comment</h3>
							 <form action="" method="post">
							 	<input type="hidden" name="p_id" value="<?php echo $valu['id'] ?>">
							 <input type="text" name="nm" placeholder="Name" required/>
							 <input type="text" name="el" placeholder="E-mail" required/>
							 <input type="text" name="pn" placeholder="Phone" required/>
							 <textarea name="mg" placeholder="Message"></textarea>
							 <input type="submit" name="btn" value="SEND"/>
							 </form>
						 </div>
						 
						 <div class="comments">
							 <h3>Comment</h3>
							 <div class="comment-grid">
								 <img src="images/pic.png" alt=""/>

								 <?php
								 while($result=mysqli_fetch_array($res)){
							     ?>
								 <div class="comment-info">
								 <h4><?php echo $result['name']?></h4>
								 <p><?php echo $result['email']?></p>
								 <h5><?php echo $result['phone']?></h5>
								 <h5><?php echo $result['message']?></h5>
								 <div class="reply_info">
								 	<?php
								 	$replys = $oop->views_reply($result['id']);
								 	while($rs=mysqli_fetch_array($replys)){
								 		echo '<p>'.$rs['message'].'</p>';
								 	}
								 	?>
								 </div>
								 <?php
								 $id=$_SESSION['id']??NULL;
								 if($id != NULL){
								 ?>
								 <div>
								 	<form action="" method="post">
								 		<input type="hidden" name="r_to"  value="<?php echo $result['id']; ?>">
								 		<textarea name="mg" placeholder="message"></textarea>
								 		<input type="submit" name="btn" value="Save">
								 	</form>
								 </div>
								 <?php
									}
								 ?> 
								 </div>
								<?php } ?>								
								 <div class="clearfix"></div>
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
					  </div>
					 
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
