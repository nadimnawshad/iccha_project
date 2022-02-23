<?php
include('../model/Instactor/db.php');
$validatepoint="";
$validateid="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{


if(strlen($_REQUEST["updateLearnerPointsId"])=="" )
{
    $validateid= "Id must be valid";
}
else
{
    $updateLearnerPointsId=$_REQUEST["updateLearnerPointsId"];
}



if($updateLearnerPointsId=="")
{
    echo "Sorry, points update failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->DeleteLernerPoints($conobj,"learner",$updateLearnerPointsId);

    if($userQuery)
    {
        echo "Point delete Successful.";
        header("location: CourseInstructorPanel.php");
    }
    else
    {
        echo "Failed. Please try again ";
    }
}


}
?>