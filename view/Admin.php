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
	<link rel="stylesheet" href="../css/style.css">
	<title>Admin</title>
</head>

<body>
	<header>
		<div class="container">
			<div class="logo">
				<a href="Homepage.php"><img src="../sources/logo.png" alt="logo" title="EOEF"></a>
			</div>
		</div>
		<hr>
	</header>
	<section>
		<div class="container"> 
			<div  class="addSection">
				<h1>Add</h1>
				<button class="btn"><a href="AddCourse.php">Add Course</a></button>
				<button class="btn"><a href="AddInstactor.php">Add Instactor</a></button>
				<button class="btn"><a href="invalidCompanies.php">Approve Compamies</a></button>
			</div>

			<div class="viewSection">
				<h1>View</h1>
				<button class="btn"><a href="ViewAllCompanies.php">View All Companies</a></button>
				<button class="btn"><a href="ViewAllLerners.php">View All Learners</a></button>
				<button class="btn"><a href="ViewAllInstactors.php">View All Instactors</a></button>	
				<button class="btn"><a href="ViewAllCourses.php">View All Courses</a></button>
			</div>
			<div class="modifySection">
				<h1>Modify</h1>
				<button class="btn"><a href="modifyCompanies.php">Modify Companies</a></button>
				<button class="btn"><a href="modifyLerners.php">Modify Learners</a></button>
				<button class="btn"><a href="modifyInstactors.php">Modify Instactors</a></button>	
				<button class="btn"><a href="modifyCourses.php">Modify Courses</a></button>				
			</div>

		</div>
	</section>
	<br>

		<div class="logoutButton"> 
				<h3>Do You want to Change Theme?</h3>
				<a class="logoutBtn" id="changeTheme"><?php echo" "?>Change Theme</a>		
		</div><br>
		<div class="container">
		<div id="themes" >
			 	<nav >
		 		 <ul>
		  	 		<li><a id="blue">Blue</a></li>
			  		<li><a id="purple">Purple</a></li>
			  		<li><a id="gray">Gray</a></li>
		  		</ul>
		  </nav>
		</div>
		</div>

	<br><br><br>
	<div class="logoutButton">
		<h3>Do You want to logout?</h3>
		<div >
			<a href="../control/Logout.php" class="logoutBtn"><?php echo" "?>LogOut</a>			
		</div>

	</div>
<br><br>
</body>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Adminjs.js"></script>
</html>		
