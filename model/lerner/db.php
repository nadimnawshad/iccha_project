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



 function InsertLerner($conn,$table,$fname,$lname,$username,$password,$email)
 {
$result = $conn->query("INSERT INTO learner(f_name,Last_name,username, password, email) Values ('$fname', '$lname', '$username','$password','$email')");
return $result;
 
 }



 function InsertComment($conn,$table,$text)
 {
$result = $conn->query("INSERT INTO commentbox(Comment) Values ('$text')");
return $result;
 
 }




 function ShowAllins($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }




 function SearchByName($conn,$table,$cname)
 {
 $result = $conn->query("SELECT * FROM $table WHERE C_Name='$cname'");
 return $result;
 }
 function ShowAllNow($conn,$table)
 {
 $result = $conn->query("SELECT * FROM $table");
 return $result;
 }
 


 
 function InsertUser2($conn,$table,$cname,$cid,$level)
 {
$result = $conn->query("INSERT INTO courses(c_name,c_id,level) Values('$cname' ,'$cid' ,'$level' )");
return $result;
 
 }
 

function InsertUser($conn,$table,$id,$password,$category)
{
$sql = $conn->query("INSERT INTO $table (userId,password,category) VALUES ('$id','$password','$category')");
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}


function SearchLernerId($conn,$table,$lernerName,$lernerPassword)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $lernerName."' AND password='". $lernerPassword."'");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           return $row["lernerId"];
        }
    }
}



 //check user and pass
 function CheckUser($conn,$table,$username,$password,$email)
 {
$result = $conn->query("SELECT * FROM  $table WHERE username='$username' AND password='$password' AND email=' $email'");
 return $result;
 }
//show the table
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }








 function CheckCourse($conn,$table,$cid)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE c_id='". $cid."'");
 return $result;
 }





 function UpdateUser($conn,$table,$cid,$cname,$level)
 {
     $sql = "UPDATE $table SET level='$level' WHERE c_id='$cid'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }



 function DeleteUser($conn,$table,$cid)
 {
     $sql = "DELETE FROM courses WHERE c_id='$cid'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }





function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
