<?php
include('../model/Instactor/db.php');

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



if(($_REQUEST["updateLearnerPointsId"])=="" )
{
    echo "Sorry, Account delete failed.";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->DeleteAcc($conobj,"instactor",$updateLearnerPointsId);

    if($userQuery)
    {
        echo "Deleted Successful.";
        header("location: Login.php");
    }
    else
    {
        echo "Failed. Please try again ";
    }
}


}
?>