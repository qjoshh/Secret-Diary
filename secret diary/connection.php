<?php 

error_reporting(0);

$link = mysqli_connect("localhost", "root", "", "secretdi");

	if(mysqli_connect_error()){

		die("connection not sucessful");
	}
?>