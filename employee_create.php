<?php
@ob_start();
session_start();
if(empty($_SESSION['emp_id'])){
         header("Location:../index.php");
}

  include("../config.php");
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Task Management</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>

<link rel="stylesheet" href="../css/bootstrap.min.css" >
<link rel="stylesheet" href="../css/style.css" >
<script src="../js/bootstrap.min.js" ></script>
</head>

<body>
<table width="1000" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1106" height="120"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="200" height="120" bgcolor="#FFFFFF"><img src="img/logo.jpg" width="200" height="120" /></td>
        <td width="800"><table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="400" height="120" bgcolor="#FFFFFF"><div align="center" style="
    font-size: 33px;
    font-weight: 700;
    font-family: -webkit-pictograph;
    color: #F208E0;
">Online Task Management</div></td>
            <td width="400" bgcolor="#FFFFFF"><strong><img src="img/header.jpg" width="400" height="120" /></strong></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FFFFFF"><?php include("menu.php");?></td>
  </tr>
  <tr>
    <td height="84" align="right" valign="bottom" bgcolor="#FFFFFF"> <a href="add_employee.php" class="btn btn-primary">
			<i class="entypo-plus"></i>
			Add Employee
	</a></td>
  </tr>
  <tr>
    <td height="143" align="center" valign="middle" bgcolor="#FFFFFF"><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table class="table table-bordered table-striped datatable" id="table-2">
        <thead>
          <tr>
            <th> S.No </th>
            <th>First Name</th>
            <th>Email Id</th>
            <th>Cell No</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

             <?php

 $sql="SELECT * FROM u_login";
$result=mysql_query($sql);
$m=1;
while($row=mysql_fetch_array($result))
{
   ?>
          <tr>
            <td><?php echo $m;?></td>
            <td><?php echo $row['f_name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><a href="edit_employee.php?aid=<?php echo $row['id'];?>" class="btn btn-default btn-sm btn-icon icon-left"> <i class="entypo-pencil"></i> Edit </a> <a href="delete_employee.php?aid=<?php echo $row['id'];?>" class="btn btn-danger btn-sm btn-icon icon-left"> <i class="entypo-cancel"></i> Delete </a> </td>
          </tr>
          <?php 
$m++;
        }
			?>
        </tbody>
    </table>
      <br />
    </form></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" bgcolor="#CCCCCC"><footer class="main" align="center">
      
      &copy; 2016 <strong style="
    /* color: #1E1E1E; */
    font-size: 15px;
    font-family: serif;
">Online Task Management</strong>
    
    </footer></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
