<?php/*
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tarun");*/
?>
<?php
	ob_start();
	@session_start();
	error_reporting(0);
	date_default_timezone_set('Asia/Kolkata');
	if($_SERVER['HTTP_HOST']=="localhost")
	{
		$name = "tarun";
		$link=mysqli_connect("localhost","root","") or die('cannot connect to the server');
		mysqli_select_db($link, $name) or die('database selection problem');
	}
	else
	{
		$name = "tarun";
		$link=mysqli_connect("localhost","root","") or die('cannot connect to the server');
		mysqli_select_db($link, $name) or die('database selection problem');
	}
?>
