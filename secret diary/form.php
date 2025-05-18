
	<div class="container" id="homepagecontainer">
		<h1>My Secret Diary</h1>
		<p><strong>Express and store your thoughts, imaginations and experiences  securely and freely.</strong></p>

			<div id="error"><?php if($error != ""){
		echo $errors.'<div class="alert alert-danger" role="alert">'.$error.'</div>';} ?></div>

<form method="post" id="signupform">

<fieldset class="form-group">
	
		<p>Interested In This New Experience? Then Sign Up today.</p>

		<input class="form-control" type="text" name="username" placeholder="Your Username">
	
	</fieldset>

<fieldset class="form-group">
	
	<input class="form-control" type="email" name="email" placeholder="Enter Your Email">

</fieldset>


<fieldset class="form-group">
	
	<input class="form-control" type="password" name="password" placeholder="password">

</fieldset>

<div class="checkbox">

		<label>

	<input type="checkbox" name="stayloggedin" value="1"> stay logged in.

</label>

	</div>


<fieldset class="form-group">
	
	<input type="hidden" name="signup" value="1">
	
	<input class="btn btn-success" type="submit" name="submit" value="Sign Up">

</fieldset>
<p><a class="toggleforms">Log In</a></p>

</form>




<!--
######################################################

THE SECOND LOG IN FORM

######################################################
-->

<form method="post" id="loginform">

<p>Already A Part Of The Fun? Then Log In.</p>

<fieldset class="form-group">
	
		<input class="form-control" type="text" name="username" placeholder="Your Username">
	
	</fieldset>

<fieldset class="form-group">
	
	<input class="form-control" type="email" name="email" placeholder="Enter Your Email">

</fieldset>

<fieldset class="form-group">
	
	<input class="form-control" type="password" name="password" placeholder="password">

</fieldset>


<div class="checkbox">

		<label>

	<input type="checkbox" name="stayloggedin" value="1"> stay logged in.

</label>

	</div>



<fieldset class="form-group">
	
	<input type="hidden" name="signup" value="0">
	
	<input class="btn btn-success" type="submit" name="submit" value="log in">

</fieldset>

	
<p><a class="toggleforms">Sign Up</a></p>
</form>


	</div>