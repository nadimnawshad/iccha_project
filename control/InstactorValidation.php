<?php
//include('../model/db.php');
$validatepass="";
$ValidateinstactorEmail="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$email=$_REQUEST["instactorEmail"];

$exprience=$_REQUEST["teachingExperience"];

if(strlen($_REQUEST["instactorEmail"])=="" || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) )

{
    $ValidateinstactorEmail= "Email is invaild";
}
else
{
    $ValidateinstactorEmail=$_REQUEST["instactorEmail"];
}

if(strlen($_REQUEST["instactorPassword"])<8 )
{
    $validatepass= "Password must be greater than 8 charecters";
}
else
{
    $instactorPassword=$_REQUEST["instactorPassword"];
}


$target_dir = "../sources/";
$target_file = $target_dir . $_FILES["filetoupload"]["name"];



    if (!move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
              echo "Sorry, there was an error uploading your file.";
    } 

if($email=="" || $exprience=="" || $instactorPassword=="")
{
    echo "Sorry, Instructor Registration failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->UpdateValidInstactor($conobj,"instactor",$_SESSION["userId"],$email,$exprience,$target_file,$instactorPassword);

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