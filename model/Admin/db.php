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




function InsertInstactor($conn,$table,$instactorName,$instactorEmail,$teachingExprience,$certification,$assignCourse,$instactorPassword ) {

     $sql = "INSERT INTO $table (instactorName,instactorEmail,teachingExprience,certification,assignCourse,instactorPassword ) VALUES ('$instactorName','$instactorEmail','$teachingExprience','$certification','$assignCourse','$instactorPassword')";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}


function updateCompanyStatus($conn,$table,$companyId,$companyStatus)
 {
     $sql = "UPDATE $table SET companyStatus='$companyStatus' WHERE companyId='$companyId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CheckCategory($conn,$table,$userId,$password) {
$result = $conn->query("SELECT category FROM ". $table." WHERE userId='". $userId."' AND password='". $password."'");
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           return $row["category"];
        }
    }
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



function SearchInstactorByName($conn,$table,$instactorName,$instactorPassword)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE instactorName='". $instactorName."' AND instactorPassword='". $instactorPassword."'");
return $result;
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

function SearchLernerById($conn,$table,$lernerId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE lernerId='". $lernerId."'");
return $result;
}

function SearchInstactorById($conn,$table,$instactorId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE instactorId='". $instactorId."'");
return $result;
}


function SearchUser($conn,$table,$Id)
{
    if($table=="instactor")
    {
        $result = $conn->query("SELECT * FROM ". $table." WHERE instactorId='". $Id."'");
    }
    else if($table=="learner")
    {
        $result = $conn->query("SELECT * FROM ". $table." WHERE lernerId='". $Id."'");
    }
    else if($table=="course")
    {
        $result = $conn->query("SELECT * FROM ". $table." WHERE courseId='". $Id."'");
    }
    else if($table=="company")
    {
        $result = $conn->query("SELECT * FROM ". $table." WHERE companyId='". $Id."'");
    }

return $result;
}

function SearchCompanyById($conn,$table,$companyId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE companyId='". $companyId."'");
return $result;
}


function SearchBarCompanyById($conn,$table,$companyId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE companyId = %'". $companyId."'%");
return $result;
}

function SearchUserPass($conn,$table,$userId)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE userId='". $userId."'");
return $result;
}

function companyValidation($conn,$table,$companyStatus)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE companyStatus='". $companyStatus."'");
return $result;
}


function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM $table");
return $result;
}



 function InsertCourse($conn,$table,$courseTitle,$courseDescription,$courseCategory,$totalCourseLevel,$courseLogo)
 {
     $sql = "INSERT INTO $table (courseTitle,courseDescription,courseCategory,totalCourseLevel,courseLogo ) VALUES ('$courseTitle','$courseDescription','$courseCategory','$totalCourseLevel','$courseLogo')";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function UpdateUser($conn,$table,$userId,$firstname,$email)
 {
    $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE userId='$userId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }


 function UpdateInstactor($conn,$table,$instactorId,$instactorName,$instactorEmail,$institutionName,$teachingExprience)
 {
    $sql = "UPDATE $table SET instactorName='$instactorName', instactorEmail='$instactorEmail', institutionName='$institutionName', teachingExprience='$teachingExprience' WHERE instactorId='$instactorId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
 function UpdateLearner($conn,$table,$lernerId,$email,$username)
 {
    $sql = "UPDATE $table SET email='$email', username='$username' WHERE lernerId='$lernerId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }
function UpdateCourse($conn,$table,$courseId,$courseTitle,$courseCategory,$totalCourseLevel)
{
        $sql = "UPDATE $table SET courseTitle='$courseTitle', courseCategory='$courseCategory', totalCourseLevel='$totalCourseLevel' WHERE courseId='$courseId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}
function UpdateCompany($conn,$table,$companyId,$companyName,$companyEmail)
{    
    $sql = "UPDATE $table SET companyName='$companyName', companyEmail='$companyEmail' WHERE companyId='$companyId'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;

}
 function DeleteUser($conn,$table,$id)
 {
    if($table=="instactor")
    {   
      $sql = "DELETE FROM $table WHERE instactorId='$id'";
        if ($conn->query($sql) === TRUE) {
         $result= TRUE;
        } else {
         $result= FALSE ;
        }

    }
    else if($table=="learner")
    {
       $sql = "DELETE FROM $table WHERE lernerId='$id'";
        if ($conn->query($sql) === TRUE) {
         $result= TRUE;
        } else {
         $result= FALSE ;
        }
    }
    else if($table=="course")
    {
       $sql = "DELETE FROM $table WHERE courseId='$id'";
        if ($conn->query($sql) === TRUE) {
         $result= TRUE;
        } else {
         $result= FALSE ;
        }
    }
    else if($table=="company")
    {
       $sql = "DELETE FROM $table WHERE companyId='$id'";
        if ($conn->query($sql) === TRUE) {
         $result= TRUE;
        } else {
         $result= FALSE ;
        }
    }

        return  $result;
 }

 function InsertLerner($conn,$table,$username,$password,$email)
 {
$result = $conn->query("INSERT INTO learner( username, password, email) Values ('$username','$password',' $email')");
return $result;
 
 }
 
function CheckUserLernero($conn,$table,$username,$password,$email)
{
$result = $conn->query("SELECT * FROM  $table WHERE username='$username' AND password='$password' AND email=' $email'");
 return $result;
}
  

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>