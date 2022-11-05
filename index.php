<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<?php include "page/head.php" ?>

</head>
<body>
<!---strat-banner---->
<div class="banner">				
	 <?php include "page/banner.php" ?>
</div>
<!---//End-banner---->
<div class="content">
	 <div class="container">
		 <?php
		 if(isset($page)){
		 	if($page=='contact'){
		 		include "page/contact.php";
		 	}
		 	if($page=='terms'){
		 		include "page/terms.php";
		 	}
		 	if($page=='single'){
		 		include "page/single.php";
		 	}


		 }
		 else{
		 	include "page/content.php";
		 }

		 ?>
	 </div>
</div>
<!--fotter-->
  <?php include "page/footer.php" ?>
<!---fotter/-->
<div class="copywrite">
	 <div class="container">
	 <p>Copyrights &copy; 2015 Blogging All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>