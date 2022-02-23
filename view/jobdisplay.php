<?php include('../control/jobreqvalidation.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>FIND YOUR DESIRED JOB</title>
</head>
<body>
        
<h2> FILL UP THE FORM </h2>

<form action="" method="POST" enctype="multipart/form-data">
name             : <input type="text" name="Name"><br><br> 
institution name: <input type="text" name=" Institutionname"><br><br>
program         : <input type="text" name="Program"><br><br>
Course completed : <input type="text" name="Coursecompleted"><br><br>

<h2>pick your job category </h2>

job Category: 
<input type="radio" id="it field" name="jobcategory" value="It field">
<label for="it field">It field</label>
<input type="radio" id="management" name="jobcategory" value="Management">
<label for="management">Management</label>
<input type="radio" id="teaching" name="jobcategory" value="Teaching">
<label for="teaching">Teaching</label>
<input type="radio" id="" name="jobcategory" value="Human resource">
<label for="human resource">Human resource</label>
<input type="radio" id="other job" name="jobcategory" value="Other job">
<label for="other job">Other job</label><br><br>

upload your resume : <input type="file" name="filetoupload"><br><br>

<input type="submit" value="submit"><?php echo " " ?>
<input type="reset" value="Reset">
<input type="button" value="Go back!" onclick="history.back()">
<button><a href="Login.php">Login Page</a></button>
</form>

</body>
</html>