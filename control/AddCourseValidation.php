<?php
include('../model/Admin/db.php');
$validateCategory="";
$validateCourseTitle="";
$validateCourseDescription="";
$validateCourseLevel="";
$validateFile="";
$message="";
$courseCategory="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $courseTitle=$courseDescription=$courseTotalLevels=$courseCategory="";

if(strlen($_REQUEST["courseTitle"])<3)
{
    $validateCourseTitle= "Course Title cannot be less than 3 charecters";

}
else
{
    $courseTitle=$_REQUEST["courseTitle"];
}

if(strlen($_REQUEST["courseDescription"])<10)
{
    $validateCourseDescription= "Course description cannot be less than 10 charecters";

}
else
{
    $courseDescription=$_REQUEST["courseDescription"];
}

if(empty($_REQUEST["courseTotalLevels"]))
{
    $validateCourseLevel= "Can not be empty.";

}
else
{
   $courseTotalLevels=$_REQUEST["courseTotalLevels"];
}


if(!isset($_REQUEST["courseCategory"]))
{
    $validateCategory = "Please select a category";
}
else
{
    $courseCategory= $_REQUEST["courseCategory"];
}

if(!isset($_REQUEST["filetoupload"]))
{
    $validateFile = "Please upload a file";
}
else
{
$target_dir = "../sources/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];

if (!move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo "Sorry, there was an error uploading your file.";
       
} 
}
if($courseTitle=="" || $courseDescription=="" || $courseTotalLevels=="" || $courseCategory=="")
{
    echo "Sorry, Course adding failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->InsertCourse($conobj,"course",$courseTitle,$courseDescription,$courseCategory,$courseTotalLevels,$target_file);

    if($userQuery)
    {
        echo "Course Createrd Successfully. Want to add more? If not then Go back";
    }
    else
    {
        echo "Failed. Please try again ";
    }
}
    



}
?>