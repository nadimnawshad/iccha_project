<?php
include('../model/Admin/db.php');
$q=$_GET["q"];
$connection = new db();
$conobj=$connection->OpenCon();
$search=$connection->SearchBarCompanyById($conobj,"company",$q); 
echo "<h3>Searched Result</h3><br>";
if($search->num_rows > 0){
echo "<table><tr><th>Id</th><th>Name</th><th>Email</th>";
                // output data of each row
while($row = $searchCompany->fetch_assoc()) {
    echo "<tr><td>".$row["companyId"]."</td><td>".$row["companyName"]."</td><td>".$row["companyEmail"]."</td></tr>";
     }
echo "</table><br><br>";
}     
?>
