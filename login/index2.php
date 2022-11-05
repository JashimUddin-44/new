<?php
session_start();
$id=$_SESSION['id'];
if($id==NULL){
	header('location:index.php');
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<?php include "pages/head.php" ?>

		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<?php include "pages/header.php" ?>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<?php include "pages/menu.php" ?>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<?php
			if(isset($pages)){
				if($pages=='add_category'){
					include "pages/add_category.php";
				}
				if($pages=='manage_category'){
					include "pages/manage_category.php";
				}
				if($pages=='publish'){
					include "pages/publish.php";
				}
				if($pages=='unpublish'){
					include "pages/unpublish.php";
				}
				if($pages=='edit'){
					include "pages/edit.php";
				}
				if($pages=='delete'){
					include "pages/delete.php";
				}

			}
			else{
				include "pages/content.php";
			}



			?>
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="addmin/js/jquery-1.9.1.min.js"></script>
	<script src="addmin/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="addmin/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="addmin/js/jquery.ui.touch-punch.js"></script>
	
		<script src="addmin/js/modernizr.js"></script>
	
		<script src="addmin/js/bootstrap.min.js"></script>
	
		<script src="addmin/js/jquery.cookie.js"></script>
	
		<script src='addmin/js/fullcalendar.min.js'></script>
	
		<script src='addmin/js/jquery.dataTables.min.js'></script>

		<script src="addmin/js/excanvas.js"></script>
	<script src="addmin/js/jquery.flot.js"></script>
	<script src="addmin/js/jquery.flot.pie.js"></script>
	<script src="addmin/js/jquery.flot.stack.js"></script>
	<script src="addmin/js/jquery.flot.resize.min.js"></script>
	
		<script src="addmin/js/jquery.chosen.min.js"></script>
	
		<script src="addmin/js/jquery.uniform.min.js"></script>
		
		<script src="addmin/js/jquery.cleditor.min.js"></script>
	
		<script src="addmin/js/jquery.noty.js"></script>
	
		<script src="addmin/js/jquery.elfinder.min.js"></script>
	
		<script src="addmin/js/jquery.raty.min.js"></script>
	
		<script src="addmin/js/jquery.iphone.toggle.js"></script>
	
		<script src="addmin/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="addmin/js/jquery.gritter.min.js"></script>
	
		<script src="addmin/js/jquery.imagesloaded.js"></script>
	
		<script src="addmin/js/jquery.masonry.min.js"></script>
	
		<script src="addmin/js/jquery.knob.modified.js"></script>
	
		<script src="addmin/js/jquery.sparkline.min.js"></script>
	
		<script src="addmin/js/counter.js"></script>
	
		<script src="addmin/js/retina.js"></script>

		<script src="addmin/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
