<!-- <?php include "../control/AddInstactorValidation.php";?> -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Add Course</title>
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
   
<h2>Requested Companies</h2>

<form action="" method="POST">
Instactor Name   : <input type="text" name="instactorTitle" placeholder="Enter Instactor name" required><br><br>
Assigned Course : 
 <?php
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->ShowAll($conobj,"course");
    if ($userQuery->num_rows > 0) {
        while($row = $userQuery->fetch_assoc()){
            $courses = $row["courseTitle"];
        }
             
    }
    else
    {
        echo "No name found";
    }

    echo "<select id='assignedCourse' name='assignedCourse'>";
    echo "<option selected='selected' value=''>Select Course</option>";
    foreach($courses as $option){
        echo "<option selected='selected' value='$option'>$option</option>";
    }
    echo "</select>";
?>


<br><br>
Password       : <input type="password" name="instactorPassword" placeholder="Enter a new password" required><br><br>

<input type="submit" value="Assign Instactor"><?php echo " " ?>
<input type="reset" value="Reset"><?php echo " " ?>

<p>Do You want to go to admin page? ? <a href="Admin.php">Go back</a></p>

</form>

</body>
</html>

