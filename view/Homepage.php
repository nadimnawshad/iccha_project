<?php
include('../control/LoginValidation.php');

if(isset($_SESSION['userId'])){
	
	if($_SESSION['category'] == "admin" ){
        header("location: Admin.php");
    }
    else if($_SESSION['category'] == "lerner"){
    	header("location: learnerDashboard.php");
    }    
    else if($_SESSION['category'] == "instactor"){
    	header("location: CourseInstructorPanel.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
	<title>Homepage</title>
</head>

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
							<li><a href="#">Trending Courses</a></li>
							<li><a href="#">Our Goal</a></li>							
						</ul>
					</div>	
					<div class="dropdown">
						<li class="dropbtn">Register</li>
						<div  class="dropdown-content">
							<ul>
								<li><a href="registrationLearner.php">Lerner</a></li>
								<li><a href="jobdisplay.php">Company</a></li>
							</ul>
						</div>
					</div>
					<li><a href="Login.php">Login</a></li>		
				</ul>
			</nav>
		</div>
		<hr>
	</header>

	<section class="banner-section">
		<div class="container">
    		    <h1>Welcome to ICCHA.com</h1>
    		    <span></span>
    		    <p>Learn->Upgrade->Be Employeed</p>
    		    <button type="button" class="btn" >Learn More</button>
	  	</div>
	  <div class="arrow">
	    <a href=""> <i class="fas fa-angle-down"></i></a>
      </div>
	</section>

	<section class="footer">
		<div class="container">
			<div class="info">
				<ul>
					<li><a href="#">Courses</a></li>
					<li><a href="#">Scholarship</a></li>
					<li><a href="#">Our Goal</a></li>							
				</ul>
			</div>
			<div class="contact">
				<ul>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">LinkedIn</a></li>
					<li><a href="#">Email</a></li>							
				</ul>
			</div>
		</div>
	</section>
</body>

</html>		
