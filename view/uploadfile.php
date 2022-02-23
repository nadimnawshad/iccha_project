<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$uploadfile=$_REQUEST["filetoupload"];
$target_dir = "../file/";
$target_file = $target_dir . $_FILES["uploadfile"]["name"];



	if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
       echo $_FILES["filetoupload"]["type"];
       echo "< img src= ".$target_file. ">" ;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
    ?>


<!DOCTYPE html>
<html lang="en">

<body>
<form action="" method="post" enctype="multipart/form-data">
 <p> Upload your picture : </p>
  <input type="file"  name="filetoupload">
  <input type="submit"  value="Upload">
</form>
 
</body>
</html>

