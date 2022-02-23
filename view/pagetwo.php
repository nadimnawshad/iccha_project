
</body>
</html>
<?php
include('../model/lerner/db.php');
session_start(); 


?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/anotherone.css">

<body>
	<header>
		<div class="container">
			<div class="logo">
			<h1 class="pop"> Profile</h1>
			</div>
           
			<nav>
				<ul>
					<div class="middle-content">
					<ul>
											
						</ul>
					</div>	
          <div class="container">
			<div class="info">
				<ul>
				<li>  
<a href="../view/learnerDashboard.php">Home</a></li>
				
				<li><a href="../view/commentdo.php">REVIEW</a></li>
											
				</ul>
			</div>
			<div class="contact">
				<ul>
					
					<li><a href="../view/instructorsee.php">Instructor info</a></li>
			
					<li><a href="coursesee.php"> Course History</a></li>							
				</ul>
			</div>
		</div>
	</section>






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
   <div class="box"> 		   
   <h1 class="lol"> Welcome to your profile </h1>
<h3 class="inp">BIO: My name is Fariha and I am a Junior Web Developer for Oswald Technologies.
   I am an accomplished coder and programmer, and I enjoy using my skills to contribute to the exciting technological advances that happen every day
   at Oswald Tech. I graduated from the California Institute of Technology in 2016  with a Bachelor's Degree in Software Development. 
   While in school, I earned the 2015 Edmund Gains Award for my exemplary academic performance and leadership skills.
</h3>
<br>

<p id ="error"></p>

<form class="frm" action="" method ="post" onsubmit="return validateForm()">
    <p class="inp">Type in the Corses you completed so far: </p>
    <input class="txt-box" type="text" name="cname" id="cname"  >
    <p class="inp"> Enter course id: </p>
    <input class="txt-box" type="text" name="cid" id="cid">
    <p class="inp"> Enter level passed: </p>
  <input class="txt-box" type="number" name="level" id="level">   
<input class="btn" name="submit" type="submit" value="OK" onclick="alert('congratulation ' )">
</form>
<br>
</div>
<?php

$connection = new db();
$conobj=$connection->OpenCon();//initiate cnnection
if (empty($_POST['cname']) || empty($_POST['cid'])) {
  $error = "Username or Password is invalid";
  }
  else
  {
    $cname=$_POST["cname"];
    $cid=$_POST["cid"];
    $level=$_POST["level"];
$userQuery=$connection->InsertUser2( $conobj,"courses",$cname,$cid,$level);
if($userQuery==TRUE){
      
        
    $error="Data Inserted";}


    else {
        $error = "Data not inserted".$conobj->error;
    }

  }



?>


    		  
	   
	  	</div>
	  <div class="arrow">
	    <a href=""> <i class="fas fa-angle-down"></i></a>
      </div>
	</section>



  <section class="footer">
		<div class="container">
			<div class="info">
				<ul>
									
				</ul>
			</div>
		</div>
	</section>
</body>

</html>		





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeOut();
    $("#div2").fadeOut("slow");
    $("#div3").fadeOut(3000);
  });
});
</script>
</head>
<body>

<p>Bye bye</p>

<button>logout below:</a></button><br><br>

<div id="div1" style="width:80px;height:80px;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;background-color:blue;"></div>

<a href="../control/logout.php">Tata!
</body>
</html>

