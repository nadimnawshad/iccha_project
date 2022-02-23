<?php
session_start(); 
if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); 
}

?>

<!DOCTYPE html>
<html>

<body>
<center>
<h2>Digital Marketing</h2>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown(5000);
  });
  $("#stop").click(function(){
    $("#panel").stop();
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  font-size: 18px;
  text-align: center;
  background-color: #555;
  color: white;
  border: solid 1px #666;
  border-radius: 3px;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
<link rel="stylesheet" href="../css/anotherone.css">
<button id="stop">Enough!</button>

<div id="flip">Information</div>
<div id="panel">Digital marketing, also called online marketing, is the promotion of brands to connect with potential customers using the internet and other forms of digital communication. This includes not only email, social media, and web-based advertising, but also text and multimedia messages as a marketing channel.</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1>Hii</h1>
<br/>
<h2>Have fun learning!</h2>

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
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    $("div").animate({left: '250px'});
  });
});
</script> 
</head>
<body>

<button>Start Animation</button>



<div style="background:black;height:100px;width:100px;position:absolute;"></div>

</body>
</html>

Want to logout? <a href="../control/logout.php">logout</a>
<br>
Want to visit page three <a href="learnerDashboard.php">Homepage</a>
</center>
</body>
</html>