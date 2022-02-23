<?php
include('../model/Instactor/db.php');
$validatepoint="";
$validateid="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(strlen($_REQUEST["updatePoint"])=="")
{
    $validateid= "Points cannot be empty";

}
else
{
    $updatePoint=$_REQUEST["updatePoint"];
}

if(strlen($_REQUEST["updateLearnerPointsId"])=="" )
{
    $validateid= "Id must be valid";
}
else
{
    $updateLearnerPointsId=$_REQUEST["updateLearnerPointsId"];
}



if($updateLearnerPointsId=="" || $updatePoint=="" )
{
    echo "Sorry, points update failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->UpdateLernerPoints($conobj,"learner",$updateLearnerPointsId,$updatePoint);

    if($userQuery)
    {
        echo "Point Update Successful.";
        header("location: CourseInstructorPanel.php");
    }
    else
    {
        echo "Failed. Please try again ";
    }
}


}
?>