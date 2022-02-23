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
<div class="boxtoo"> 
  
<?php
include('../model/lerner/db.php');


$connection = new db();
$conobj=$connection->OpenCon();//initiate cnnection





//to show a table
$userQuery=$connection->ShowAllins($conobj,"instactor");
//of the table is found.. print the table if it is found
if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Experience</th><th>course assigned</th></tr>"; //html table heading
    // output data of each row
    while($row = $userQuery->fetch_assoc()) { 
      echo "<tr><td>".$row["instactorId"]."</td><td>".$row["instactorName"]."</td><td>".$row["teachingExprience"]."</td><td>".$row["assignCourse"]."</td></tr>";
    }
    echo "</table>";//close table tag
  } else {
    echo "0 results";
  }


?>	
</div>
</center>