<?php 

session_start();

	
		echo "stringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstring";
		echo "stringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstring";
		echo "stringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstring";
		echo "stringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstringstring";
		
	include("conn2.php");

	$query = "SELECT * FROM srch_res WHERE res = '".mysqli_real_escape_string($link, $_POST['srch'])."' ";

	$result = mysqli_query($link, $query);

	$row = mysqli_num_rows($result);

	if ($row == 0) {
	}



?>