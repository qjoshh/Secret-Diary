<?php

include("imp.php");

$error = "";

$errors = "";



if(array_key_exists("logout", $_GET)){

unset($_SESSION);

unset($_SESSION);

unset($_SESSION);

setcookie("id", $_SEESION['id'], time() - 60 * 60 * 24 * 369);

$_COOKIE['id'] = "";

header("location: secretdiary3.php");


}
else if((array_key_exists("id", $_SESSION) AND $_SESSION['id']) AND (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {

header("location: index.php");

}

if(array_key_exists('submit', $_POST)){

	include("connection.php");
	
	
	if(!$_POST['username']){
		$error .= "A username is required<br>";
	}if(!$_POST['email']){
		$error .= "An email address is required<br>";
	}if(!$_POST['password']){
		$error .= "A password is required<br>";
	}if($error != ""){
		$errors= "<p>There were error(s) in your form: </p>";
	}else{

		if($_POST['signup'] == '1'){

		$query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) > 0) {
			$error .= "Email address taken";
		}else{
			$query = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['username'])."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

			if(!mysqli_query($link, $query)){
				$error .= "<p>You could not be signed up - please try again</p>";
			}else{

				$query = "UPDATE `users` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

				$_SESSION['id'] = mysqli_insert_id($link);

				if($_POST['stayloggedin'] == '1'){

					setcookie("id",mysqli_insert_id($link), time() + 60 * 60 * 24 * 365);

				}

					mysqli_query($link, $query);

				header("location: index.php");
			}
		}
	}else{	 
		 
		$query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

		$result = mysqli_query($link, $query);

		$row = mysqli_fetch_array($result);

		if(isset($row)){

			$hashedpassword = md5(md5($row['id']).$_POST['password']);

			if ($hashedpassword == $row['password']) {

				$_SESSION['id'] = $row['id'];

		if($_POST['stayloggedin'] == '1'){

					setcookie("id",$_SESSION['id'], time() + 60 * 60 * 24 * 365);

				}

					mysqli_query($link, $query);

					header("location: index.php");



			}else{
			$error .= "Email/Password combination could not be found";
		}

		}else{
			$error .= "Email/Password combination could not be found";
		}

	}
}

	
}

?>


<?php include("header2.php"); ?>

<?php include("form.php"); ?>

<?php include("footer.php"); ?>