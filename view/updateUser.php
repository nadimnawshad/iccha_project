<?php
include('../model/Admin/db.php');

            $connection = new db();
            $conobj=$connection->OpenCon();

            if($_REQUEST['table']=="instactor")
            {
               $userQuery=$connection->UpdateInstactor($conobj,$_REQUEST['table'],$_REQUEST['id'],$_REQUEST['instTitle'],$_REQUEST['instEmail'],$_REQUEST['instInstitution'],$_REQUEST['instExprience']);
            }
            else if($_REQUEST['table']=="learner")
            {
               $userQuery=$connection->UpdateLearner($conobj,$_REQUEST['table'],$_REQUEST['id'],$_REQUEST['learEmail'],$_REQUEST['username']);
            }
            else if($_REQUEST['table']=="course")
            {
               $userQuery=$connection->UpdateCourse($conobj,$_REQUEST['table'],$_REQUEST['id'],$_REQUEST['courTitle'],$_REQUEST['courCategory'],$_REQUEST['totalCourLevel']);
            }
            else if($_REQUEST['table']=="company")
            {
               $userQuery=$connection->UpdateCompany($conobj,$_REQUEST['table'],$_REQUEST['id'],$_REQUEST['comTitle'],$_REQUEST['comEmail']);
            }
             
?>