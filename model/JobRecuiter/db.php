<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "eoep";
 //create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function InsertUser($conn,$table,$Name,$InstitutionName, $Program, $CourseCompleted)
 {
$result = $conn->query("INSERT INTO instactor(instactorName,institutionName,assignCourse,courseCompleted) Values ('$Name', '$InstitutionName','$Program', '$CourseCompleted')");
return $result;
 
 }
 
 //check user and pass
 function CheckUser($conn,$table,$Name,$Institutionname, $Program, $CourseCompleted)
 {
$result = $conn->query("SELECT * FROM  $table WHERE instactorName='$Name' AND 
    institutionName='$Institutionname' AND assignCourse=' $Program' AND courseCompleted= 'CourseCompleted'
	");
 return $result;
 }
//show the table
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
//update a user
 /*function UpdateUser($conn,$table,$username,$firstname,$email)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }*/

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>