<?php
class log{
	public function out(){
        header('location:index.php');
        session_start();
		unset($_SESSION['id']);
        unset($_SESSION['name']);
	}
}


$obj= new log;
$obj->out();


?>