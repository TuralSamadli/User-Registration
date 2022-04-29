<?php

require_once "db.php";

$fullName = $_POST['fullname'];
$role = $_POST['role'];
$salary = $_POST['salary'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$marialStatus = $_POST['marial_status'];


$query = $db->prepare('insert into employees set fullname = ? ,role = ? ,salary = ? , email = ? ,phone = ? ,marial_status = ?');
$insert = $query->execute(array($fullName,$role,$salary,$email,$phone,$marialStatus));

if($insert){
    header("Location:index.php");
}


?>