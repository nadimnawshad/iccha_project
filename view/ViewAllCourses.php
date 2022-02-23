<?php
include('../model/Admin/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Course</title>
</head>
<body>
      <header>
       <div class="container">
            <div class="logo">
                <a href="Homepage.php"><img src="../sources/logo.png" alt="logo" title="EOEF"></a>
            </div>
            <div class="searchBar">
              <form>
                   <input type="text" name="courseId" id="search" placeholder=" Search......">              
              </form> 
              <div class="logoutButton">
                <a href="Admin.php" class="logoutBtn">Go Back</a>
              </div>           
            </div>
       </div>
   <hr>
   </header>
   <section>
     <div class="container">
      <div class="viewCourseClass">
        <h1>All Courses</h1>
        <div class="courseList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->ShowAll($conobj,"course");
              echo "<h3>Courses List</h3><br>";
            if ($userQuery->num_rows > 0) {
                  echo "<table><thead><tr><th>Id</th><th>Title</th><th>Category</th><th>Levels</th></tr></thead>";
                  ?>
                  <tbody id="data">
                  <?php
                  // output data of each row
                  while($row = $userQuery->fetch_assoc()) {
                     echo "<tr><td>".$row["courseId"]."</td><td>".$row["courseTitle"]."</td><td>".$row["courseCategory"]."</td><td>".$row["totalCourseLevel"]."</td></tr>";
                  }
                  echo "</tbody></table>";
            }            
            else {
              echo "0 results";
            }
          ?>
        </div>
        
      </div>
       
     </div>
   </section>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Adminjs.js"></script>
</body>
</html>
