<?php
@ob_start();
session_start();
if(empty($_SESSION['emp_id'])){
         header("Location:../index.php");
}

include_once('../config.php');


if(isset($_POST['save'])){
    $msg='';
    
    $txtid = $_POST['id'];
$p_id =$_POST["p_id"];
$p_title =$_POST["p_title"];
$p_des =$_POST["p_des"];
$s_date =$_POST["s_date"];
$e_date =$_POST["e_date"];
$notes =$_POST["notes"];	
if(($_FILES["project_img"]["name"])!="")
{
    $target_dir = "../uploads/";
    $qry1 ="SELECT * FROM `projects` where `id`='$txtid'";
    $result=mysql_query($qry1);
	$row1=mysql_fetch_array($result);
    	$ma1=$row1["p_doc"];

    $target_file1 = $target_dir.$ma1;
    unlink($target_file1);
    $today = date("Y_m_d_H_i_s").'_'.basename($_FILES["project_img"]["name"]);
    $target_file = $target_dir . $today ;
    move_uploaded_file($_FILES["project_img"]["tmp_name"], $target_file);
    $qry="UPDATE `projects` SET `p_id`='$p_id', `p_title`='$p_title', `p_des`='$p_des', `p_doc`='$today', `s_date`='$s_date', `e_date`='$e_date', `notes`='$notes'  WHERE `id` = '$txtid'";
  $result=mysql_query($qry); 
 }
 else
 {
 $qry="UPDATE `projects` SET `p_id`='$p_id', `p_title`='$p_title', `p_des`='$p_des',  `s_date`='$s_date', `e_date`='$e_date', `notes`='$notes'  WHERE `id` = '$txtid'"; 
  $result=mysql_query($qry);
  }
    $msg="Records created successfully.";
    $path = "project_create.php?msg=$msg";
   header('Location: '.$path);


}