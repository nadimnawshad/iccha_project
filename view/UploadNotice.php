<?php
$validateNotice = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 echo "no data saved";

 if(empty($_REQUEST["notice"]))
 {
  $validateNotice = " Notice can not be empty";
 }
 else
 {
            $notices=$_REQUEST["notice"];
            $existingdata = file_get_contents('../sources/notices.json');
            $tempJSONdata = json_decode($existingdata);
            $tempJSONdata[] =$notices;
            //Convert updated array to JSON
            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
       
            //write json data into data.json file
                if(file_put_contents("../sources/notices.json", $jsondata)) {
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
    <title>Upload Notice</title>
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
            <h1>Upload Notice</h1>
            <form action="" method="POST"class="addCourseForm"onsubmit="return UpdateNot()">

<br><label>Write a notice : </label> <input type="text" name="notice" id="notice" placeholder="Enter a notice"><p id="noticeError" class="errorMsg"></p>
<?php echo $validateNotice ?><br><br>
    <input type="submit"  value="Submit" class="btn submitButton"><?php echo " " ?>
    <input type="reset" value="Reset" class="btn submitButton"><?php echo " " ?>
</form>
<div class="backButton addCourseBack">
                <h3>Do You want to go back?</h3>
                <a href="CourseInstructorPanel.php" class="btn "><?php echo" "?>Go Back</a>            
            </div>
        </div>
    </div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Instructorjs.js"></script>
</body>
</html>
