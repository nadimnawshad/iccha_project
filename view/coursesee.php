<?php
include('../model/lerner/db.php');
session_start(); 


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../css/anotherone.css">



<center>
<br>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1 class="popie">See your instructors</h1>
  <br>
  <br>
  <br>
<div class="boxie"> 
  
<h2>Your course history</h2>


  
   <body>
      <div class="box">

      <center>

<?php
$connection = new db();
$conobj=$connection->OpenCon();//initiate cnnection





//to show a table
$userQuery=$connection->ShowAll($conobj,"courses");
//of the table is found.. print the table if it is found
if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>ID</th><th>level</th></tr>"; //html table heading
    // output data of each row
    while($row = $userQuery->fetch_assoc()) { 
      echo "<tr><td>".$row["c_name"]."</td><td>".$row["c_id"]."</td><td>".$row["level"]."</td></tr>";
    }
    echo "</table>";//close table tag
  } else {
    echo "0 results";
  }


?>
<center>
</div>
</div>
<br>
<br>
<br>
<a href="../view/courseupdate.php">Update Course</a>
