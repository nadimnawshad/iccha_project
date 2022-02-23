<?php
include('../model/lerner/db.php');


 $cid=$cname=$level="";
 $connection = new db();
 $conobj=$connection->OpenCon();

 if (isset($_POST['search'])) {


 $userQuery=$connection->CheckCourse($conobj,"courses", $_REQUEST["cid"]);
 
 if ($userQuery->num_rows > 0) {
 
     // output data of each row
     while($row = $userQuery->fetch_assoc()) {
        $cname=$row["c_name"];
        $cid=$row["c_id"];
       $level=$row["level"];
      
      
    
   } 
 }
   else {
     echo "0 results";
   }
 
}




if (isset($_POST['update'])) {
if (empty($_REQUEST["cid"]) || empty($_REQUEST['cname'])) {
$error = "input given is invalid";
}
else
{
 echo $_REQUEST["cid"];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"courses", $_REQUEST["cid"], $_REQUEST["cname"],  $_REQUEST["level"]);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}





if (isset($_POST['delete'])) {
if (empty($_POST['cid']) || empty($_POST['cname'])) {
$error = "input given is invalid";
}
else
{ echo $_REQUEST["cid"];
  $cid= $_POST['cid'];
  $cname = $_POST['cname'];
  $level = $_POST['level'];
  

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->DeleteUser($conobj,"courses",$cid);
if($userQuery==TRUE)
{
    echo "delete successful"; 
}
else
{
    echo "could not delete".$conobj->error;    
}
$connection->CloseCon($conobj);

}
}


?>









Go back <a href="../view/pageone.php">Homepage</a>
<br>
<br>
<a href="../control/lngout.php">logout</a>

</body>
</html>

