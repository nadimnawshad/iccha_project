<?php
include('../model/Admin/db.php');

            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->DeleteUser($conobj,$_REQUEST['table'],$_REQUEST['id']);
            
?>