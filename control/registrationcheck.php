<?php
include( '../model/db.php');
$error="";

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email'])) {
$error = "Username or Password is invalid";
}
else
{
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$connection =new db();
$conobj =$connection->OpenCon();

$userQuery=$connection->InsertUser( $conobj, "learner", $username, $password,$email);
if($userQuery==TRUE){
        header("location: ../view/login.php");
        
    $error="Data Inserted";}


    else {
        $error = "Data not inserted".$conobj->error;
    }
   @$connection->CloseCon($conobj);
}
}
?>



