<?php
include('../model/Instactor/db.php');

$validatepass="";
$validateCertification="";
$validateInsatactorName="";
$validateExp="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$updateInstactorEmail=$_REQUEST["updateInstactorEmail"];

$updateTeachingExperience=$_REQUEST["updateTeachingExperience"];
$updateInstactorPassword=$_REQUEST["updateInstactorPassword"];

if(strlen($_REQUEST["updateInstactorName"])<3)
{
    $validateInsatactorName= "Instactor name cannot be less than 3 charecters";

}
else
{
    $updateInstactorName=$_REQUEST["updateInstactorName"];
}

if(strlen($_REQUEST["updateInstactorPassword"])<8 )
{
    $validatepass= "Password must be greater than 8 charecters";
}
else
{
    $updateInstactorPassword=$_REQUEST["updateInstactorPassword"];
}

if(empty($_REQUEST["updateTeachingExperience"]))
{
    $validateExp="Enter your teaching Experience";
}


$target_dir = "../sources/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];



    if (!move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
              echo "Sorry, there was an error uploading your file.";
    } 

if($updateInstactorName="" || $updateInstactorEmail=="" || $updateTeachingExperience=="" || $updateInstactorPassword=="")
{
    echo "Sorry, Update failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();
$userId=$_SESSION["userId"];
    $userQuery=$connection->UpdateValidInstactor($conobj,"instactor",$userId,$updateInstactorName,$updateInstactorEmail,$updateTeachingExperience,$target_file,$updateInstactorPassword);

    if($userQuery)
    {
        echo "Instactor Registration Successful.";
        header("location: CourseInstructorPanel.php");
    }
    else
    {
        echo "Failed. Please try again ";
    }
}


}
?>