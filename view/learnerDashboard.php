<?php
session_start(); 
if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); 

}

?>
<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script>
<style> 
#panel, #flip {
	background-color: #001a1a;
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
 
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
 
<div id="flip">Trendings: </div>
<div id="panel"><a href="pagethree.php"> Content Writing</a><br><a href="pagefour.php"> Graphic designing</a> <br>  <a href="pagefive.php"> Illustration </a> <br> <a href="pagesix.php"> Digital Marketing </a>   </div>



<link rel="stylesheet" href="../css/stylies.css">

		
<body>
	<header>
		<div class="container">
			<div class="logo">
				<a href="Homepage.php"><img src="../sources/logo.png" alt="logo" title="EOEF"></a>
			</div>
           
			<nav>
				<ul>
					<div class="middle-content">
					<ul>
							<li><a href="#">Home</a></li>
							<li><a  href="#">More</a></li>
							<li><a href="pagetwo.php">Your Profile</a></li>							
						</ul>
					</div>	







<body>
<legend>
 
   
    <br>



<div class="dropdown">
					
						
					</div>
							
				</ul>
			</nav>
		</div>
		<hr>
	</header>

	<section class="banner-section">
		<div class="container">
    		    <h1 class="inn" >A place to unleash your creativity</h1>
    		  

            <div class="ri">
           <h2 class="inn"> Search Courses:</h2>
<input type="text" name="cname" id="cname" >
<br>

<button name="submit" onclick="myAjax()">Search</button>
<br>
<br>
<p id="demo"></p>
</legend>
</body>
</html>
<script src="../js/do.js"></script>
</div>
    		  
    		   
	  	</div>
	  <div class="arrow">
	    <a href=""> <i class="fas fa-angle-down"></i></a>
      </div>
	</section>


	<section class="footer">
		<div class="container">
			<div class="info">
				<ul>
				<li><a href="#">Facebook</a></li>
				<br>
				<li><a href="#">MORE</a></li>
											
				</ul>
			</div>
			<div class="contact">
				<ul>
					
					<li><a href="#">LinkedIn</a></li>
					<br>
					<li><a href="../control/logout.php">Exit</a></li>							
				</ul>
			</div>
		</div>
	</section>
</body>

</html>		










