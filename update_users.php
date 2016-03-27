<?php
@ob_start();
session_start();
if(empty($_SESSION['emp_id'])){
         header("Location:../index.php");
}

include_once('../config.php');


if(isset($_POST['save'])){
    $msg='';

$txtid =$_POST["id"];
$p_id =$_POST["p_id"];
$e_name =$_POST["e_name"];
$email =$_POST["email"];
$p_pass =$_POST["p_pass"];
$c_no =$_POST["c_no"];

    $qry="UPDATE `u_login` SET `emp_id`='$p_id', `f_name`='$e_name', `email`='$email', `pass`='$p_pass', `mobile`='$c_no'  WHERE `id` = '$txtid'";
   $result=mysql_query($qry);

    $msg="Records created successfully.";
   $path = "employee_create.php";
 header('Location: '.$path);
}

