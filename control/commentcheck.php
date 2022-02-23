<?php
include( '../model/lerner/db.php');

$error="";

if (isset($_POST['submit'])) {
if (empty($_POST['a'])) {
$error = "Empty";
}
else
{
    $text = $_POST['a'];
   
$connection =new db();
$conobj =$connection->OpenCon();

$userQuery=$connection->InsertComment( $conobj,"commentbox",$text);

if($userQuery==TRUE){
            echo "Your comment is: ".$text;
       
    $error="Data Inserted";}


    else {
        $error = "Data not inserted".$conobj->error;
    }
   @$connection->CloseCon($conobj);
}
}
?>
