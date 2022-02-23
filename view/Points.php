<?php
include('../control/UpdatePointsValidation.php');
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
   <section >
    
    
     <div class="container">

      <div class="viewInstactorClass">
        <h1>All Student points</h1>
        <div class="instactorList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->ShowstudentsPoint($conobj,"learner");
              echo "<h3>Courses List</h3><br>";
              if ($userQuery->num_rows > 0) {
                echo "<table><thead><tr><th>Id</th><th>Name</th><th>Points</th></tr></thead>";
                ?>
                <tbody id="data">
                <?php 
                while($row = $userQuery->fetch_assoc()) {
                  echo "<tr><td>".$row["lernerId"]."</td><td>".$row["username"]."</td><td>".$row["Point"]."</td></tr>";
                }
                echo "</tbody></table>";
              } else {
                echo "0 results";
              }
          ?>
        </div>
        
      </div>

     </div>
            <div class="backButton addCourseBack" >
               
                <a class="btn " id="pointUpdateButton"><?php echo" "?>Update</a>            
            
                
                <a href="CourseInstructorPanel.php" class="btn " id="hideBack"><?php echo" "?>Go Back</a>            
            </div>
   </section>

    <section id="UpdatePointForm">
	
    <div class="container" >
        <div class="addCourseClass" >
        	<h1>Points Info</h1>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" class="addCourseForm" method="post" enctype="multipart/form-data" onsubmit="return pointValidation()">
<br><label> Id         :</label><br> <input type="text" name="updateLearnerPointsId" id="updateLearnerPointsId" placeholder="Enter id"><p id="updateLearnerPointsIdError" class="errorMsg"></p><?php echo $validateid ?> <br><br>
<br><label>Update point          :</label><br> <input type="text" name="updatePoint" id="updatePoint" placeholder="Enter Point"><p id="updatePointError" class="errorMsg"><?php echo $validatepoint ?> <br><br>
<br><br>
<center>
<input type="submit" class="btn submitButton" value="Update"> <?php echo " " ?>
</center>
</form>

            <div class="backButton addCourseBack" id="goBackBtn">
                <h3>Do You want to go back?</h3>
                <a href="CourseInstructorPanel.php" class="btn "><?php echo" "?>Go Back</a>            
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Instructorjs.js"></script>
</body>
</center>
</html>		
