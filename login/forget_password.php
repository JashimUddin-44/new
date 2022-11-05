<?php

include "email_check.php";

$op= new email;
$op->chek($_POST['email']);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
</head>
<body>
	
	<form action="" method="post">
		<label for="email">Email Addresss</label>
		<input type="email" name="email" id="email" placeholder="Email Address">
		<button type="submit">Submit</button>
	</form>

</body>
</html>