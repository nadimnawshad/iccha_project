<?php
$validateMatrials = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
 if(empty($_REQUEST["filetoupload"]))
 {
  $validateMatrials = " Please upload a file";
 }
 else
 {
            $matrials=$_REQUEST["filetoupload"];
            $existingdata = file_get_contents('../sources/matrials.json');
            $tempJSONdata = json_decode($existingdata);
            $tempJSONdata[] =$matrials;
            //Convert updated array to JSON
            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
       
            //write json data into data.json file
                if(file_put_contents("../sources/matrials.json", $jsondata)) {
                    echo "Data successfully saved <br>";
                }
                else 
                    echo "no data saved";

 }
  
     
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Upload materials</title>
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
            <h1>Upload Materials</h1>
            <form action="" method="POST"class="addCourseForm" onsubmit="return UpdateMate()">
                
                <br><label>Upload matrials   : </label><input type="file" name="filetoupload" id="filetoupload"><br>
                <p id="filetouploadError" class="errorMsg" ></p>
                    <?php echo $validateMatrials; ?><br>                     
                <input type="submit" value="Upload" class="btn submitButton">
            </form>
            <div class="backButton addCourseBack" id="backToInstructor">
                <h3>Do You want to go back?</h3>
                <a href="CourseInstructorPanel.php" class="btn "><?php echo" "?>Go Back</a>            
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Instructorjs.js"></script>
</body>
</html>
