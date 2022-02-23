<?php
include('../model/Admin/db.php');

            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->SearchUser($conobj,$_REQUEST['table'],$_REQUEST['id']);
            echo "<h3>Information</h3><br>";
            if ($userQuery->num_rows > 0) {
               if($_REQUEST['table']=="instactor")
               {
                  while($row = $userQuery->fetch_assoc()) {
                     echo "<form class='addInstactorForm addCourseForm'>
                            <br><label>Instactor Name:<label><br>
                            <input type='text' name='instTitle' id='instTitle' value=".$row["instactorName"]."> 
                            <br><p id='instTitleError'></p><br><label>Instactor Email:<label><br>
                            <input type='text' name='instEmail' id='instEmail' value=".$row["instactorEmail"]."> 
                            <br><p id='instEmailError'></p><br><label>Instactor Institution:<label><br>
                            <input type='text' name='instInstitution' id='instInstitution' value=".$row["institutionName"]."> 
                            <br><p id='instInstitutionError'></p><br><label>Instactor Exprience:<label><br>
                            <input type='number' name='instExprience' id='instExprience' value=".$row["teachingExprience"]."><br><p id='instExprienceError'></p>";
                  }
               }
               else if($_REQUEST['table']=="learner") 
               {
                  while($row = $userQuery->fetch_assoc()) {
                     echo "<form class='addInstactorForm addCourseForm'> 
                            <br><label>Learner Email:<label><br>
                            <input type='text' name='learEmail' id='learEmail' value=".$row["email"]."> 
                            <br><p id='instEmailError'></p><br><label>Learner Username:<label><br>
                            <input type='text' name='username' id='username' value=".$row["username"]."><br><p id='usernameError'></p>";
                  }

               }

               else if($_REQUEST['table']=="course") 
               {
                  while($row = $userQuery->fetch_assoc()) {
                     echo "<form class='addInstactorForm addCourseForm'> 
                            <br><label>Course Title:<label><br>
                            <input type='text' name='courTitle' id='courTitle' value=".$row["courseTitle"]."> 
                            <br><p id='courseTitleError'></p><br><label>Course Category:<label><br>
                            <input type='text' name='courCategory' id='courCategory' value=".$row["courseCategory"]."><br><p id='courseCategoryError'></p>
                            <br><label>Total Course Level:<label><br>
                            <input type='text' name='totalCourLevel' id='totalCourLevel' value=".$row["totalCourseLevel"]."><br><p id='courseCategoryError'></p>";
                  }

               }

               else if($_REQUEST['table']=="company") 
               {
                  while($row = $userQuery->fetch_assoc()) {
                     echo "<form class='addInstactorForm addCourseForm'> 
                            <br><label>Company Name:<label><br>
                            <input type='text' name='comTitle' id='comTitle' value=".$row["companyName"]."> 
                            <br><p id='comTitleError'></p><br><label>Company Email:<label><br>
                            <input type='text' name='comEmail' id='comEmail' value=".$row["companyEmail"]."><br><p id='comEmailError'></p>";
                  }

               }
            }
            else {
              echo "0 results";
            }   
?>