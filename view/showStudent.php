<?php 

include('../model/Instactor/db.php');

            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->SearchLernerById($conobj,"learner",$_REQUEST['id']);
        echo "<h3>Information</h3><br>";          
if ($userQuery->num_rows > 0) {
      while($row = $userQuery->fetch_assoc()) {

            echo "ID : ".$row["lernerId"]."<br>
            User Name : ".$row["username"]."<br>
            Email : ".$row["email"]."<br>
            Point : ".$row["Point"]."<br>";
      }
   }
   else
   {
      echo "0 results";
   }

?>