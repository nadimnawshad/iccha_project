<?php
include( '../model/lerner/db.php');

$error="";

if (isset($_POST['submit'])) {
    if(!isset($_POST["language1"])&&!isset($_POST["language2"])&&!isset($_POST["language3"]))
    {
        $error = "please select at least one checkbox";
        
    }
    else{
       if(isset($_POST["language1"]))
       {
           $error= $_POST["language1"];
       }
       if(isset($_POST["language2"]))
       { 
        $error= $_POST["language2"];
       }
       if(isset($_POST["language3"]))
       {
        $error=$_POST["language3"];
       }
    }
    if(isset($_POST["designation"]))
    {
        $error= $_POST["designation"];
    }
    else{
        $error= "please select at least one radio";
    }
if (empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email'])) {
$error = "Username or Password is invalid";
}
else
{
    $fname=$_POST['fname'];
    $lname=$_POST['Last_name'];
     $username=$_POST['username'];
     $password=$_POST['password'];
     $email=$_POST['email'];

$connection =new db();
$conobj =$connection->OpenCon();

$userQuery=$connection->InsertLerner($conobj,"learner",$fname,$lname,$username,$password,$email);

if($userQuery==TRUE){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
        header("location: ../view/Login.php");

        
    $error="Data Inserted";}


    else {
        $error = "Data not inserted".$conobj->error;
    }
   
   @$connection->CloseCon($conobj);
}
}
?>