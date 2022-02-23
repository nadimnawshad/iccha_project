<?php
include('../model/Admin/db.php');
$validatepass = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
  $connection = new db();
  $conobj=$connection->OpenCon();
     $searchPass=$connection->SearchUserPass($conobj,"user",$_REQUEST["id"]); 


     if ($searchPass->num_rows > 0) {
        while($row = $searchPass->fetch_assoc()) {
            $validatepass = "Your password is ".$row["password"];
            }
     }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/style.css">
<title>Forgot Password</title>
</head>

<body>
      <header>
       <div class="container">
            <div class="logo">
                <a href="Homepage.php"><img src="../sources/logo.png" alt="logo" title="EOEF"></a>
            </div>
        </div>
   <hr>
   </header>
   <section >
    <div class="container">
        <div class="addCourseClass">
         <h2>Forgot Password</h2>
 
         <form action="" method="POST" class="addCourseForm">
         <br><label>User Id   : </label><br><input type="text" name="id" placeholder="Enter Your Id">
         <?php echo $validatepass; ?><br><br>  
         <input type="submit" class="btn submitButton" id="forgotPass"  value="Submit">
         <p id="backId"></p>
         </form>
         <div class="backButton addCourseBack">
            <h3>Do You want to go back?</h3>
            <a href="Login.php" class="btn "><?php echo" "?>Go Back</a>            
         </div>
        </div>
    </div>
   </section>      

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Adminjs.js"></script>
</body>
</html>
