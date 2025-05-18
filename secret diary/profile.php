<?php 

include("imp.php");


$error = "";

$errors = "";

$sucess = "";

$first = "";

$first2 = "";

$first3 = "";

$first4 = "";

$uperror = "";

$uperrors = "";

$size = "";

$type = "";
	
if(array_key_exists('submit1', $_POST)){

	include("connection.php");
	
	
	if(!$_POST['username']){
		$error .= "A username is required<br>";
	}if($error != ""){
		$errors= "<p>There were error(s) in your form: </p>";
	}else{
			$query = "UPDATE `users` SET `username` = '".mysqli_real_escape_string($link, $_POST['username'])."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

			if(!mysqli_query($link, $query)){
				$error .= "<p>Your username could not be updated - Please try again</p>";
			}else{

				$sucess .=  '<div class="alert width alert-success" role="alert">'.'Data Uploaded Sucessfully'.'</div>';
			}

	}
}




if(array_key_exists('submit', $_POST)){

	include("connection.php");
	
	
	if(!$_POST['email']){
		$error .= "An email is required<br>";
	}if($error != ""){
		$errors= "<p>There were error(s) in your form: </p>";
	}else{
			$query = "UPDATE `users` SET `email` = '".mysqli_real_escape_string($link, $_POST['email'])."' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

			if(!mysqli_query($link, $query)){
				$error .= "<p>Your email could not be updated - Please try again</p>";
			}else{

				$sucess .=  '<div class="alert width alert-success" role="alert">'.'Data Uploaded Sucessfully'.'</div>';
			}

	}
}



include("connection.php");

$query = "SELECT * FROM users WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." ";

		$result = mysqli_query($link, $query);

		$row = mysqli_fetch_array($result);

		$print = $row['username'];

		$print2 = $row['email'];

		$print3 = $row['name'];

		$print4 = $row['date'];

		$first  .= '<div class="time3">'.'Your Username: '.$print.'<br>'.'</div>';

		$first2  .= '<div class="time3">'.'Your Email: '.$print2.'<br>'.'</div>';

		$first3  .= '<div class="time3">'.'Diary Name: '.$print3.'<br>'.'</div>';

		$first4  .= '<div class="time3">'.'Date Last Edited: '.$print4.'<br>'.'</div>';

	



include("header.php");

?>





<center>

	<div class="mo">


<div class="profile">

<?php include("temp2.php");?>

<?php include("nav.php");?>

<img class="pp t" src="1<?php echo $pic;?>">

<p>Type Of Image: <?php echo $type;?></p>
<p>Image Size: <?php echo $size;?></p>

<button class="btn bg8">CANCEL</button>

<div id="erroer">
	    <?php if($uperror != ""){
		echo $uperrors.'<div class="alert width alert-danger" role="alert">'.$uperror.'</div>';
		}
		?>
</div>

<form id="pic" action="" method="post" enctype="multipart/form-data">



<fieldset class="form-group">

	
		<p class="styled">Enter the image you want to add.</p>

		
		<input id="flep" class="form-control input" type="file" name="profile" accept="image/*" placeholder="Your Image">

		<input id="sub" class="btn btn-success btb" type="submit" name="bg" value="Upload Profile Picture">

	</fieldset>

</form>

</div>


<button class="btn bg5" id="ad">UPLOAD PROFILE PIC</button>


		<?php  

	echo $first;

	echo $first2;

	echo $first3;

	echo $first4;

	?>		

<button class="btn bg7" id="ad2">UPDATE USERNAME</button><button class="btn bg7" id="ad3">UPDATE EMAIL</button>

	</div>



 <div id="error">
	    <?php if($error != ""){
		echo $errors.'<div class="alert width alert-danger" role="alert">'.$error.'</div>';
		}
		?>


	    <?php if($error == ""){
		echo $errors.$sucess;
		}
		?>
			
		</div>

<form class="form_move" method="post" id="signupform">


<fieldset class="form-group">
	
		<p>Update Your Username.</p>

		<input class="form-control inputed" type="text" name="username" placeholder="Your Username">
	
	</fieldset>


<fieldset class="form-group">
	
	<input class="btn btn-success" type="submit" name="submit1" value="Update">

</fieldset>

</form>






<form class="form_move2" method="post" id="signupform">

<fieldset class="form-group">
	
		<p>Update Your Email.</p>

	<input class="form-control inputed" type="email" name="email" placeholder="Enter Your Email">
		
	
	</fieldset>


<fieldset class="form-group">
	
	<input class="btn btn-success" type="submit" name="submit" value="Update">

</fieldset>

</form>



</center>

<?php include("footer.php");?>