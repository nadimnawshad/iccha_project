<?php
include('../control/ViewStuByPointsValidation.php');
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
<title>Update points</title>
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
        <div class="addCourseClass">
        	<h1>Points Info</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" class="addCourseForm" method="post" enctype="multipart/form-data">
<br><label>Enter Point to see less and greater          :</label><br> <input type="text" name="updatePoint" placeholder="Enter Point"><?php echo $validatepoint ?> <br><br>
<br><br>
<center>
<input type="submit" class="btn submitButton" value="Find"> <?php echo " " ?>
</center>
</form>

            <div class="backButton addCourseBack">
                <h3>Do You want to go back?</h3>
                <a href="CourseInstructorPanel.php" class="btn "><?php echo" "?>Go Back</a>            
            </div>
        </div>
    </div>
</section>


</body>
</center>
</html>		
