<?php
include('../model/Instactor/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Students</title>
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
    <section>
     <div class="container">
      <div class="viewLernerClass">
        <h1>All Students</h1>
        <div class="lernerList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->ShowAll($conobj,"learner");
              echo "<h3>Lerner List</h3><br>";
            if ($userQuery->num_rows > 0) {
                echo "<table><thead><tr><th>Id</th><th>Name</th><th>Email</th></tr></thead>";
                ?>
                <tbody id="data">
                <?php
             while($row = $userQuery->fetch_assoc()) {
               echo "<tr><td>".$row["lernerId"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td></tr>";
              }
              echo "</tbody></table>";
            } else {
               echo "0 results";
            }
          ?>
        </div>
        
      </div>
       
     </div><br>
     <div class="logoutButton">
      
                <a href="CourseInstructorPanel.php" class="logoutBtn">Go Back</a>
              </div>    
   </section>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/myjs.js"></script>
</body>
</html>
