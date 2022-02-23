<?php 
include( '../control/registrationcheck.php');

?>
<!DOCTYPE html>
<html>
<body>


<center>


<h2>Registration</h2>

<form action="" method="post">
    <p> Enter Username: </p>
    <input type="text" name="username" placeholder="Enter your username" ><br>


    <p> Enter password: </p>
    <input type="password" name="password" placeholder="Enter your password" >
    <br>
    <br>

   
  Enter your email:
  <input type="email" name="email">   
  <br>
  <br>


<input name="submit" type="submit" value="Registration" onclick="alert('Your registration is successful. WELCOME')">
</form>
<br>

<?php echo $error  ?>
</center>
</body>
</html>
