
<?php
include('../model/lerner/db.php');



$cname = $_POST['cname'];
//$interest = $_POST['uinterest'];
//$des = $_POST['udesignation'];




if($cname!="" )
{



$connection = new db();
$conobj=$connection->OpenCon();



$MyQuery=$connection->SearchByName($conobj,"coursenew",$cname);







if ($MyQuery->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Name</th><th><th>Description</th></th><th>Level</th></tr>";

while($row = $MyQuery->fetch_assoc()) {
echo "<tr><td>".$row["C_id"]."</td><td>".$row["C_Name"]."</td><td>".$row["C_Desc"]."</td><td>".$row["C_Level"]."</td></tr>";
}

}else{
echo "Not found";

}
}

?>

