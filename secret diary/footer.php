<script type="text/javascript" src="js\jquery-3.3.1.min.js"></script>
<script type ="text/javascript" src="js\jquery-ui\jquery-ui.js"></script>
<script type="text/javascript" src="js\bootstrap.min.js"></script>

<script type="text/javascript">
	

	$(".toggleforms").click(function(){

	$("#signupform").toggle();
	$("#loginform").toggle();

	});

	$('#diary').bind('input propertychange', function(){

		$.ajax({

			method: "POST", 
			url: "updatedbase.php", 
			data: { content: $("#diary").val() }
		})

		

	});



$("#ad").click(function(){

	$("#pic").toggle("slow");

})
$("#ad2").click(function(){

	$(".form_move").toggle("slow");

})
$("#ad3").click(function(){

	$(".form_move2").toggle("slow");

})

$("#btb").click(function(){

	alert("hello");

})

$(".t").click(function(){

	$(this).addClass("pl");
	$(this).removeClass("pp");
	$(".bg8").fadeIn("slow");

})

$(".bg8").click(function(){

	$(".t").addClass("pp");
	$(".t").removeClass("pl");
	$(".bg8").toggle("slow");

})




  /*=================home slide=================*/

/*=== first slide ===== second coming*/
var bgArr = 
[
"img/bac/water_drip_drop_splash_art-wallpaper-1366x768.jpg", 
"img/bac/space_27-wallpaper-1366x768.jpg", 
"img/bac/map_5-wallpaper-1366x768.jpg",
"img/bac/europe_continent-wallpaper-1366x768.jpg",
"img/bac/space_stars_4-wallpaper-1366x768.jpg",
"img/bac/black_hole-wallpaper-1366x768.jpg",  
"img/bac/red_and_black_map-wallpaper-1280x768.jpg",
"img/bac/spooky_path-wallpaper-1366x768.jpg"]; 
var i=0;


$("#change").click(function(){

 i = (i== bgArr.length-1 ? 0 : i+1);
  $(".slider").css("background-image", "url("+bgArr[i]+")");

 $(".slider").css("color", "white")

});





                                              /*===end===*/


$(".tme").click(function(){
	$(".movedd").toggle("slow");
	$(".time").toggle("slow");
})

$("#di").click(function(){
	$("#named").toggle("slow");
})
</script>


</body>


</html>