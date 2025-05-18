<?php include("imp.php");?>

<?php include("temp2.php");?>

<?php include("nav.php");?>

<?php 
	
	if ($login===true) {
	}else{
		header("location: secretdiary3.php");
	}

?>


<div class="container-fluid moved">


<form method="post" id="named">

<fieldset class="form-group">
	
		<p class="styled">Enter the name of your diary.</p>

		
		<input class="form-control input" type="text" name="name" placeholder="Your Diary Name">

		<input class="btn btn-success bt" type="submit" name="submit">

	</fieldset>

</form>


	<?php  echo $star;?>

	<div class="movedd">Last Edited: <?php  echo $time;?></div>

	<textarea id="diary" class="x slider"><?php echo $diarycontent;?></textarea>


</div>

<?php include("footer.php");?>