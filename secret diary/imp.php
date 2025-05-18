<?php 

error_reporting(0);

session_start();

$diarycontent = "";

$star = "";

$time = "";

$hey = "";

$img = "";

$login = "";

if(array_key_exists('logout', $_GET)){

	unset($_SESSION);

	setcookie("id", "", time() - 60 * 60 * 24 * 369);

	$_COOKIE['id'] = "";

	$_SESSION['id'] = "";
	
	header("location: secretdiary3.php");

}
if(array_key_exists('profile', $_GET)){

	header("location: profile.php");

}
if(array_key_exists('id', $_COOKIE)){

	$_SESSION['id'] = $_COOKIE['id'];

}
if(array_key_exists('id', $_SESSION)){

	include("connection.php");

	$query = "SELECT diary FROM users WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

	$row = mysqli_fetch_array(mysqli_query($link, $query));

	$diarycontent = $row['diary'];

	$login = true;

}



if (array_key_exists("name", $_POST)) {

include("connection.php");

setcookie("name", $_POST['name'], time() + 60 * 60 * 24 * 365);

$query = "UPDATE `users` SET `name` = '".mysqli_real_escape_string($link, $_POST['name'])."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

 mysqli_query($link, $query);

$query = "SELECT name FROM users WHERE id =  ".mysqli_real_escape_string($link, $_SESSION['id'])." ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

$print = $row['name'];

$_COOKIE['name'] = $row['name'];

$talk = $_COOKIE['name'];

$star .= '<h1 class="big">'.$talk.'</h1>';

}else{

$query = "SELECT name FROM users WHERE id =  ".mysqli_real_escape_string($link, $_SESSION['id'])." ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

$print = $row['name'];

$_COOKIE['name'] = $row['name'];

$talk = $_COOKIE['name'];

$star .= '<h1 class="big">'.$talk.'</h1>';
				

}



include("connection.php");

$query = "SELECT * FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);

$print = $row['date'];

$_COOKIE['date'] = $row['date'];

$timed = $_COOKIE['date'];

$time  .= '<span class="time">'.$timed.'</span>';

$print2 = $row['username'];

$_COOKIE['username'] = $row['username'];

$greet = $_COOKIE['username'];

$hey  .= '<div class="time2">'.'Welcome: '.$greet.'</div>';

$print3 = $row['pic'];

$_COOKIE['pic'] = $row['pic'];

$greet3 = $_COOKIE['pic'];


include("header.php");
?>
