<?php
class db{
 
function OpenCon() {
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "eoep";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
return $conn;
}

function CheckUser($conn,$table,$userId,$password) {
$result = $conn->query("SELECT * FROM ". $table." WHERE userId='". $userId."' AND password='". $password."'");
 return $result;
 }

 function UpdateInstactor($conn,$table,$instactorId,$instactorEmail,$teachingExprience,$certification,$instactorPassword )
 {
     $sql = "UPDATE $table SET instactorEmail='$instactorEmail', teachingExprience='$teachingExprience', , certification='$certification',instactorPassword='$instactorPassword' WHERE instactorId='$instactorId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }


function UpdateValidInstactor($conn,$table,$instactorId,$instactorEmail,$teachingExprience,$certification,
    $instactorPassword )
 {
     $sql = "UPDATE $table SET  instactorEmail='$instactorEmail', teachingExprience='$teachingExprience',certification='$certification', instactorPassword='$instactorPassword'  
     WHERE instactorId='$instactorId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }


function SearchInstactorByName($conn,$table,$instactorName,$instactorPassword)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE instactorName='". $instactorName."' AND instactorPassword='". $instactorPassword."'");
return $result;
}

function SearchInstactorById($conn,$table,$instactorId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE instactorId='". $instactorId."'");
return $result;
}

function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM $table");
return $result;
}
function SearchLernerById($conn,$table,$lernerId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE lernerId='". $lernerId."'");
return $result;
}

function UpdateLernerPoints($conn,$table,$lernerId,$Point)
{
$sql = "UPDATE $table SET Point='$Point' WHERE lernerId='$lernerId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}
function DeleteAcc($conn,$table,$instactorid)
{
    //DELETE acc
$sql = "DELETE FROM $table WHERE instactorId ='$instactorid'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}
//Search by id for points
function ShowstudentsPoint($conn,$table)
 {
$result = $conn->query("SELECT lernerId,username,Point FROM $table");
return $result;
}
//Search by less than points 
function ShowstudentsLPoint($conn,$table,$Point)
 {
$result = $conn->query("SELECT lernerId,username,Point FROM ". $table." WHERE Point <'". $Point."'");
return $result;
}
//delete lerner point
function DeleteLernerPoints($conn,$table,$lid)
{
    
$sql = "UPDATE $table SET Point='NULL' WHERE lernerId='$lid'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}

//Search by greater than points 
function ShowstudentsGPoint($conn,$table,$Point)
 {
$result = $conn->query("SELECT lernerId,username,Point FROM ". $table." WHERE Point >'". $Point."'");
return $result;
}
//Search for equal no
function ShowstudentsSamePoint($conn,$table,$Point)
 {
$result = $conn->query("SELECT lernerId,username,Point FROM ". $table." WHERE Point ='". $Point."'");
return $result;
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>