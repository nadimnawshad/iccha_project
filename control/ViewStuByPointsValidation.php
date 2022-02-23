
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


if($updatePoint=="" )
{
    echo "Sorry, points loading failed.";
}
else
{
    $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery1=$connection->ShowstudentsGPoint($conobj,"learner",$updatePoint);
            $userQuery2=$connection->ShowstudentsLPoint($conobj,"learner",$updatePoint);
            $userQuery3=$connection->ShowstudentsSamePoint($conobj,"learner",$updatePoint);

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
              if ($userQuery2->num_rows > 0) {
              	echo"Lower Points";
                echo "<table><thead><tr><th>Id</th><th>Name</th><th>Points</th></tr></thead>";
                ?>
                <tbody id="data">
                <?php 
                while($row = $userQuery2->fetch_assoc()) {

                  echo "<tr><td>".$row["lernerId"]."</td><td>".$row["username"]."</td><td>".$row["Point"]."</td></tr>";
                }
                echo "</tbody></table>";
              } else {
                echo "0 results";
              }
              //ShowstudentsSamePoint
              if ($userQuery3->num_rows > 0) {
              	echo"Equal Points";
                echo "<table><thead><tr><th>Id</th><th>Name</th><th>Points</th></tr></thead>";
                ?>
                <tbody id="data">
                <?php 
                while($row = $userQuery3->fetch_assoc()) {

                  echo "<tr><td>".$row["lernerId"]."</td><td>".$row["username"]."</td><td>".$row["Point"]."</td></tr>";
                }
                echo "</tbody></table>";
              } else {
                echo "0 results";
              }


}     
}
?>





