<?php include "../control/AddCourseValidation.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<title>Add Course</title>

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
        <div class="addCourseClass">
            <h1>Add Course</h1>
            <form action="" method="POST" class="addCourseForm" enctype="multipart/form-data" 
            onsubmit="return addCourseValidation()">
            <br><label>Course Title: </label><br><input type="text" name="courseTitle" id="courseTitle" 
            placeholder="Enter course Title" >
            <p id="courseTitleError" class="errorMsg"></p>
            <?php echo $validateCourseTitle; ?>

            <br><label>Course short description : </label><br><textarea name="courseDescription" 
            id="courseDescription" placeholder="Enter course short description" ></textarea>
            <p id="courseDescriptionError" class="errorMsg"></p> 
            <?php echo $validateCourseDescription; ?>

            <br><label>Course Category :</label><br>
            <input type="radio" id="techonology" name="courseCategory" value="Techonology">
            <label for="techonology">Techonology</label><br>
            <input type="radio" id="businessStudies" name="courseCategory" value="Business Studies">
            <label for="businessStudies">Business Studies</label><br>
            <input type="radio" id="bioScience" name="courseCategory" value="Bio Science">
            <label for="bioScience">Bio Science</label><br>
            <input type="radio" id="mechanical" name="courseCategory" value="History">
            <label for="mechanical">Mechanical</label><br>
            <input type="radio" id="history" name="courseCategory" value="History">
            <label for="history">History</label><br>
            <input type="radio" id="arts" name="courseCategory" value="Arts">
            <label for="arts">Arts</label>
            <p id="courseCategoryError" class="errorMsg"></p>
            <?php echo $validateCategory."<br>"; ?><br>

            <br><label>Course total levels : </label><br><input type="number" id="courseTotalLevels" 
            name="courseTotalLevels" 
            placeholder="Enter total course levels">
            <p id="courseTotalLevelsError" class="errorMsg"></p>
            <?php echo $validateCourseLevel; ?><br><br>

            <label>Choose a file : </label><input type="file" name="filetoupload" id="filetoupload"><br><br>
            <p id="filetouploadError" class="errorMsg"></p>
            <?php echo $validateFile."<br>"; ?><br>

            <input type="submit" class="btn submitButton" value="Add Course"> <?php echo " " ?>
            <input type="reset" class="btn submitButton" value="Reset">
            </form>
            <div class="backButton addCourseBack">
                <h3>Do You want to go back?</h3>
                <a href="Admin.php" class="btn "><?php echo" "?>Go Back</a>            
            </div>
        </div>
    </div>    
       
   </section>



<script type="text/javascript" src="../js/Adminjs.js"></script>
</body>
</html>