<?php include('../model/Admin/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Companies</title>
</head>
<body>
    <header>
       <div class="container">
            <div class="logo">
                <a href="Homepage.php"><img src="../sources/logo.png" alt="logo" title="EOEF"></a>
            </div>
            <div class="searchBar">
              <form>
                   <input type="text" name="companyId" id="search" placeholder=" Search......">              
              </form> 
              <div class="logoutButton">
                <a href="Admin.php" id="baCktoPrev" class="logoutBtn">Go Back</a>
              </div>           
            </div>

        </div>
   <hr>
   </header>
   <section>
     <div class="container">
      <div class="viewCompanyClass">
        <h1>All Companies List</h1>
        <div class="companyList" id="companyList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->ShowAll($conobj,"company");
            echo "<h3>Company List</h3><br>";
            if ($userQuery->num_rows > 0) {
                  echo "<table><thead><tr><th>Id</th><th>Name</th><th>Email</th></tr></thead>";                    
                  ?>
                  <tbody id="data">
                  <?php
                  while($row = $userQuery->fetch_assoc()) {


                     echo "<tr><td>".$row["companyId"]."</td><td>".$row["companyName"]."</td><td>".
                     $row["companyEmail"] ."</td></tr>";
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
