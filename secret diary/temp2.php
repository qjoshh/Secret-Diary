	<?php 


if (isset($_FILES['profile']) === true) {
		if (empty($_FILES['profile']['name']) === true) {
			echo "enter a file";
		}else{

$uploaded_size = $_FILES['profile']['size'];
$uploaded_type = $_FILES['profile']['type'];
$uploaded_name = $_FILES['profile']['name'];

$showtype = $uploaded_type;
$showtype2 = round($uploaded_size / 1024) . 'kb';

if ($uploaded_size > 921600){
$uperror .= "Your picture is too large to be uploaded - A maximum of 900 kilobytes is required.;
";
$ok=0;
}if ($uploaded_type =="text/php"){
$uperror .= "No PHP files allowed";
$ok=0;
}else{
$query = "UPDATE users SET pic = '".mysqli_real_escape_string($link, $uploaded_name)."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

$target = mysqli_query($link, $query);

$target = $target . basename( $_FILES['profile']['name']) ;

$ok=1;  

$query2 = "UPDATE users SET type = '".mysqli_real_escape_string($link, $showtype)."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

mysqli_query($link, $query2);


$query3 = "UPDATE users SET size = '".mysqli_real_escape_string($link, $showtype2)."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

mysqli_query($link, $query3);

}

if(move_uploaded_file($_FILES['profile']['tmp_name'], $target)){
	
}
else {
$uperror .= "Sorry, there was a problem uploading your file.";
}

}}


$query = "SELECT * FROM users WHERE id =  ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

$pic = $row['pic'];	

$size = $row['size'];

$type = $row['type'];

	?>