
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg_nav">
  
   

  <a class="navbar-brand lite" href="index.php">My Lovely Diary</a>

  <button class="navbar-toggler bg-light " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

<button class="btn bg" id="change">CHANGE BACKGROUND</button>
<button class="btn bg2 tme">TIME STAMP</button>
<button class="btn bg3" id="di">ENTER DIARY NAME</button>

<form method="get">

<button class="btn bg6" type="submit" id="pr" name="profile">VIEW PROFILE</button>

</form>

<form method="get">
    <div class="right">
       <button class="btn bg4" type="submit" name="logout">LOG OUT</button>

    </div>

   </form>


       <p class="styled"><?php  echo $hey;?></p><img class="pq" src="1<?php echo $pic;?>">
</div>
</nav>
