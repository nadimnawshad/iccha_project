<?php
session_start();
include('../control/InstactorUpdateValidation.php');
if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); 
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/style.css">
<title>Update profile</title>
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
   <section >
    <div class="container">
        <div class="addCourseClass instacTorRegClass">
        	<h1>Update Instructor</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" class="addCourseForm" method="post" enctype="multipart/form-data"
    onsubmit="return UpInstructorRegValidation()">
<br><label>Update Name          :</label><br> <input type="text" name="updateInstactorName" id ="updateInstactorName" placeholder="Enter instactor Name"  ><?php echo $validateInsatactorName ?> <br><br>
<p id="updateInstactorNameError" class="errorMsg"></p>
<br><label>Update Password          :</label><br> <input type="password" name="updateInstactorPassword" id="updateInstactorPassword"  placeholder="Enter new password"><p id="updateInstactorPasswordError" class="errorMsg"></p><?php echo $validatepass ?> <br><br>
<br><label>Your Email         : </label><br><input type="text" name="updateInstactorEmail" id="updateInstactorEmail"  placeholder="Enter instactor email" >
<p id="updateInstactorEmailError" class="errorMsg"></p>
<br><br>
<br><label>Certification :</label> <input type="file" name="filetoupload" id="filetoupload"><?php echo 
$validateCertification; ?><br><br>
<p id="filetouploadError" class="errorMsg"></p>
<br><label>Teaching Exprience :</label><br> <input type="number" name="updateTeachingExperience" id="updateTeachingExperience" placeholder="Enter Teaching Exprience"><p id="updateTeachingExperienceError" class="errorMsg"></p><?php echo $validateExp ?><br><br>
<input type="submit" class="btn submitButton" value="Update"> <?php echo " " ?>
<input type="reset" class="btn submitButton" value="Reset">
</form>

            <div class="backButton addCourseBack">
                <h3>Do You want to go back?</h3>
                <a href="CourseInstructorPanel.php" class="btn "><?php echo" "?>Go Back</a>            
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="../js/Instructorjs.js"></script>

</body>
</center>
</html>		