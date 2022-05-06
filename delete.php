<?php


require_once "db.php";


    $query = $db->prepare("UPDATE `employees` SET `is_deleted` = '1' where id =:id");

    $delete = $query->execute([
        'id' =>$_POST['employeeId']
    ]);

   if($delete){
    header("refresh:2;index.php");
   }
  