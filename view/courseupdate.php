<?php
include('../control/courseupdatecheck.php');
session_start(); 
?>

<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="../css/anotherone.css">
<center>
    <br>
    <br>
    <br>
    <br>
<h1 class="popie"> Update Courses you have finished</h1>
<br>
    <br><br>
    <br>
<form action='' method='post'>
enter course id :
 <input type='text' name='cid'id="cid"  >
<br>
<input name='search' type='submit' value='Search'>  
</form>

<form class="frm"  action='' method='post'>
ID:  <input type='text' name='cid' value="<?php echo $cid; ?>" ><br>
 <br>
Name:  <input type='text' name='cname' value="<?php echo $cname; ?>" > <br>
<br>
Level:  <input type='text' name='level' value="<?php echo $level; ?>" > <br>

<br>

<input class="txt-box" name='update' type='submit' value='Update'><br> <br> <input name='delete' type='submit' value='delete'>  

</form>
</center>




</body>
</html>

