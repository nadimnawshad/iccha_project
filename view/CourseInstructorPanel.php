<?php
session_start(); 
include('../model/Admin/db.php');
    $connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->SearchInstactorById($conobj,"instactor",$_SESSION["userId"]);

        if ($userQuery->num_rows > 0) {
            while($row = $userQuery->fetch_assoc()) {
            	$instactorId=$row["instactorId"];
            	$instactorName=$row["instactorName"];
            	$instactorEmail=$row["instactorEmail"];
            	$teachingExprience=$row["teachingExprience"];
            	$certification=$row["certification"];
            	$assignCourse=$row["assignCourse"];
            }
        }    	

if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); 
}
else if($instactorEmail=="" || $teachingExprience==0 || $certification=="")
{
	header("Location: ../view/CourseInstructorReg.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
	<title>Course Instructor</title>
</head>

<center>
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
					<h3>Profile</h3>
					<button class="btn"><a href="UpdateInstactorProfile.php">Update Profile</a></button>
					<button class="btn"><a href="DeleteFromInstructor.php">Delete Account</a></button>
			</div>
			<div class="viewSection">
				<h3>Courses</h3> 
				<button class="btn"><a href="UploadMatrials.php">Upload Materials</a></button>
				<button class="btn"><a href="UploadNotice.php">Notices</a></button>
				<button class="btn"><a href="InstactorsLerners.php">All Students</a></button>
				<button class="btn"><a href="SearchStudent.php">Search Student</a></button>
				<button class="btn"><a href="Points.php">Points</a></button>
				<button class="btn"><a href="delPoints.php">Delete Points</a></button>
				<button class="btn"><a href="ViewStuByPoints.php">View students by Points</a></button>

			</div>
		</div>
	</section>	
	<br><br>
	<div class="logoutButton">
		<h3>Do You want to logoout?</h3>
		<div >
			<a href="../control/Logout.php" class="logoutBtn"><?php echo" "?>LogOut</a>			
		</div>

	</div>

</body>
</center>
</html>		
