<?php
include('../model/Instactor/db.php');
$validatepoint="";
$validateid="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(strlen($_REQUEST["updateId"])=="")
{
    $validateid= "Id cannot be empty";

}
else
{
    $updateId=$_REQUEST["updateId"];
}


if($updateId=="" )
{
    echo "Sorry, points loading failed.";
}
else
{
    $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery1=$connection->SearchLernerById($conobj,"learner",$updateId);

              echo "<h3>Points</h3><br>";
              if ($userQuery1->num_rows > 0) {
              	echo"Higher Points";
                echo "<table><thead><tr><th>Id</th><th>Name</th><th>Points</th></tr></thead>";
                ?>
                <tbody id="data">
                <?php 
                while($row = $userQuery1->fetch_assoc()) {
                  echo "<tr><td>".$row["lernerId"]."</td><td>".$row["username"]."</td><td>".$row["Point"]."</td></tr>";
                }
                echo "</tbody></table>";
              } else {
                echo "0 results";
              }
              


}     
}
?>





