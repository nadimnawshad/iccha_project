<?php
include('../model/Admin/db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>View All Instactor</title>
</head>
<body>
      <header>
       <div class="container">
            <div class="logo">
                <a href="Homepage.php"><img src="../sources/logo.png" alt="logo" title="EOEF"></a>
            </div>
            <div class="searchBar">
              <form>
                   <input type="text" name="searchId" id="search" placeholder=" Search......">              
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
      <div class="viewInstactorClass">
        <h1>Modify Instactor Details</h1><br>
          <div class="companyApprovalForm" >
            <input type="text" name="instactorId" id="searchId" placeholder="Enter Instactor Id"> 
            <input type="submit" class="btn submitButton" id="update" 
              onclick="updateFunc(document.getElementById('searchId').value,'instactor')" value="Update">
            <input type="submit" class="btn submitButton" id="delete" 
            onclick="deleteFunc(document.getElementById('searchId').value,'instactor')" value="Delete">
            <br><p id="message"></p><br>
          </div>
          <div id="popUp" class="popUp">
            <div class="popUp-content">
              <p id="display"></p><br><br>
               <div class="logoutButton">
                <a id="updateDetails" class="logoutBtn" id="updateDetails">Update</a>
                <a id="back" class="logoutBtn">Go Back</a>
              </div>
            </div>
          </div>
        <div class="instactorList">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();
            $userQuery=$connection->ShowAll($conobj,"instactor");
              echo "<h3>Instactor List</h3><br>";
              if ($userQuery->num_rows > 0) {?>
                <table id="table" onmouseover="searchId()"><thead><tr><th>Id</th><th>Name</th><th>Email</th></tr></thead>
                  <tbody id="data">
                <?php 
                while($row = $userQuery->fetch_assoc()) {
                  echo "<tr><td>".$row["instactorId"]."</td><td>".$row["instactorName"]."</td><td>".$row["instactorEmail"]."</td></tr>";
                }
                echo "</tbody></table>";
              } else {
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
