

<?php
session_start(); 

if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); }

?>
<center>
<!DOCTYPE html>
<html>
<body>
<h2>Digital Marketing</h2>

<br/>Hope your inner creativity gets exposed!
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<br>
Want to logout? <a href="../control/logout.php">logout</a>
<br>
 <a href="../view/learnerDashboard.php">Homepage</a>
</center>
</body>
</html>