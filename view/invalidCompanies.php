<?php
include('../model/Admin/db.php');
$validateCompanyId = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
  $connection = new db();
  $conobj=$connection->OpenCon();
     $searchCompany=$connection->SearchCompanyById($conobj,"company",$_REQUEST["companyId"]); 


     if ($searchCompany->num_rows > 0) {
        while($row = $searchCompany->fetch_assoc()) {
            $companyStatus = $row["companyStatus"];
            }
     }
      if($companyStatus=="invalid")
      {
            $updateCompany=$connection->updateCompanyStatus($conobj,"company",
              $_REQUEST["companyId"],"valid");
            if($updateCompany)
            {
              echo "Assigned Successfully";
            }
            else
            {
              echo "Assigned failed";
            }
      }   
     
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Company Approval</title>
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
                <a href="Admin.php" class="logoutBtn">Go Back</a>
              </div>           
            </div>
        </div>
   <hr>
   </header>
   <section>
     <div class="container">
      <div class="approveCompanyClass">
        <h1>Companies approval Request</h1><br>
          <form action="" method="POST" class="companyApprovalForm" >
            <input type="text" name="companyId" id="searchId" placeholder="Enter Company Id"> 
            <input type="submit" class="btn submitButton" value="Approve Company">
          </form>
        <div class="companyApproval">
          <?php
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->companyValidation($conobj,"company","invalid");

            if ($userQuery->num_rows > 0) { ?>
                <table id="table" onmouseover="searchId()"><thead><tr><th>Id</th><th>Name</th><th>Email</th></tr></thead>
                  <tbody id="data">
                <?php // output data of each row
                while($row = $userQuery->fetch_assoc()) {
                 echo "<tr><td>".$row["companyId"]."</td><td>".$row["companyName"]."</td><td>".$row["companyEmail"]."</td></tr>";
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
