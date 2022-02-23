<?php include('../control/commentcheck.php');  ?>

<!DOCTYPE html>
<html>
<head>
  <center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
</script>
<link rel="stylesheet" href="../css/anotherone.css">
<center>
<br>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="boxtoo"> 
  
<button>Leave Reviews Below:
  <hr>

</button>

<p class="popie">Invite Friends</p>
<p class="popie">Don't give up!!</p>
<br>
<br>
<form action="" method ="post" >






<td>Leave a review:</td>
<td><input type="text" name="a" id =a> </td>

<br>
  <br>
  <br>
 

<input name="submit" type="submit" value="submit">

<?php echo $error  ?>

</center>
</div>
<br>
  <br>
  <br>

</form>
  </head>
</body>
</html>