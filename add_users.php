<?php
@ob_start();
session_start();
if(empty($_SESSION['emp_id'])){
         header("Location:../index.php");
}

include_once('../config.php');


if(isset($_POST['save'])){
    $msg='';
	

$p_id =$_POST["p_id"];
$e_name =$_POST["e_name"];
$email =$_POST["email"];
$p_pass =$_POST["p_pass"];
$c_no =$_POST["c_no"];

    $qry="INSERT INTO u_login (emp_id, f_name, email, pass, mobile,	u_type) VALUES ('$p_id','$e_name', '$email', '$p_pass','$c_no','emp');";
   $result=mysql_query($qry);

    $msg="Records created successfully.";
   $path = "employee_create.php";
 header('Location: '.$path);
}

