	<?php  

	if (isset($_FILES['profile']) === true) {
		if (empty($_FILES['profile']['name']) === true) {
			echo "enter a file";
		}else{

			$allowed = array('jpg', 'jpeg', 'gif', 'png');

			$file_name = $_FILES['profile']['name'];

			$file_extn = strtolower(end(explode('.', $file_name)));

			$file_temp = $_FILES['profile']['tmp_name'];

			print_r($file_temp);

			if (in_array($file_extn, $allowed) === true) {

			include("connection.php");


			$query = "UPDATE users SET pic = ".$_FILES['profile']." WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

			if (mysqli_query($link, $query)) {
				echo "yay";
			}else{
				echo "fail";
			}

			}else{
				echo "incorrect file type";
				echo implode(', ', $allowed);

			}
		}
	}


	?>