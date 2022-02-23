<?php
session_start(); 
if(empty($_SESSION["userId"])) 
{
header("Location: ../view/Login.php"); 
}

?>

<center>
<!DOCTYPE html>
<html>
<body>
<h2>Content Writing</h2>

Hii,
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
<br>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").hide(1000);
  });
});
</script>
</head>
<body>

<button>Hide</button>

<p>Welcome</p>
<p>Here!!</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>
</head>
<body>
<link rel="stylesheet" href="../css/anotherone.css">
<button id="show">Information</button>
<p>
What Is Content Writing?
Content writing is the process of planning, writing and editing web content,
 typically for digital marketing purposes. It can include writing blog posts and articles, scripts for videos and podcasts,
  as well as content for specific platforms, such as tweetstorms on Twitter or text posts on Reddit.
</p>



</body>
</html>













<br>
Want to logout? <a href="../control/logout.php">logout</a>
<br>
Want to visit page two <a href="learnerDashboard.php">Homepage</a>
</center>
</body>
</html>