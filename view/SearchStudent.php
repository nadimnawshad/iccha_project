<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
<title>Search Student</title>
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
            <h1>Student Info</h1>
            <div class="addCourseForm" >
            <br><label>Enter Id          :</label><br> <input type="text" name="tSearch" 
            id="tSearch" placeholder="Enter id to search">
            <p id="result"></p>
            <center>
            <input type="submit" class="btn submitButton" value="Find" 
                    onclick="SearchForStudent()"> <?php echo " " ?>
            </center>
            </div>

            <div class="backButton addCourseBack">
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
