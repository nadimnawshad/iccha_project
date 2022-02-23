 <?php
  include('../control/getInstactorInfo.php'); 
  include('../control/InstactorValidation.php');
  ?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../css/style.css">
<title>Instructor Registration</title>
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
    <section >
      <div class="container">
        <div class="instacTorRegClass">
            <h1>Course Instructor Registration Form</h1>
            <form action="" method="post" class="instRegForm" enctype="multipart/form-data" onsubmit="return InstructorRegValidation()">

            <br><label>Your Name          :  </label><br><input type="text" name="instactorName " id="instactorName" value=" <?php echo $instactorName; ?> " disabled>
            <br><label>Your Email         :</label> <br><input type="text" name="instactorEmail" id="instactorEmail" placeholder="Enter instactor email" >
            <p id="instactorEmailError" class="errorMsg"></p>

            <br><label>Assigned Course :  </label><br> <input type="text" name="instactorName" value=" <?php echo $assignCourse; ?> " disabled>
            <br><label>Certification :  </label> <input type="file" name="filetoupload" id="filetoupload" >
             <p id="filetouploadError" class="errorMsg"></p>
            <br><label>Teaching Exprience :  </label><br> <input type="number" name="teachingExperience" id="teachingExperience"placeholder="Enter Teaching Exprience" >
            <p id="teachingExperienceError" class="errorMsg"></p>
            <br><label>Password :  </label><br> <input type="password" name="instactorPassword" id="instactorPassword" placeholder="Enter New Password" >  <p id="instactorPasswordError" class="errorMsg"></p><?php echo $validatepass; ?><br><br>
            <input type="submit" class="btn submitButton" value="SUBMIT">
          </form>
        </div>
      </div>
    </section>
</form>
</center>
<h3>Do You want to logoout?</h3>
        <div >
            <a href="../control/Logout.php" class="logoutBtn"><?php echo" "?>LogOut</a>         
        </div>
<script type="text/javascript" src="../js/Instructorjs.js"></script>
</body>
</html>
