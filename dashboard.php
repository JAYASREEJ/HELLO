<?php
@ob_start();
session_start();
if(empty($_SESSION['emp_id'])){
         header("Location:../index.php");
}
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

<script src="js/jquery.js"></script>
<script src="js/jquery.validate.js"></script>

<script>
  

  
  $().ready(function() {
    
    // validate signup form on keyup and submit

    $("#form1").validate({
        
      messages: {
        client_id:"Please enter the Client id",
        c_name:"Please enter the Client Name",
        c_p_title:"Please enter the Project Title",
        c_file:"Please insert the file",
        c_email:"Please enter the E-mail",
        c_pass:"Please enter the Password",
        c_s_date:"Please enter the Starting date",
        c_e_date:"Please enter the Ending date",
        c_notes:"Please enter your messages"
          },
     
    });

    $("#reset").click(function() {
    $("label.error").hide();
    $(".error").removeClass("error");
    });

    
  });
  </script>



<style>
label .error
{
  color: red !important;
}
</style>
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
    <td height="345" align="center" valign="middle" bgcolor="#FFFFFF">
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <br />
      <br />
      <table width="660" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="50" align="center" valign="middle">&nbsp;</td>
          <td width="460" align="center" valign="middle" bgcolor="#FFFFFF" style="
    font-size: 18px;
    font-family: -webkit-pictograph;
    font-weight: 300;
">&nbsp;</td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td width="100" height="57" align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle" bgcolor="#999999" style="
    font-size: 30px;
    color: #FAFAFA;
    font-family: -webkit-pictograph;
    font-weight: 600;
">Welcome to Admin</td>
          <td width="100" align="center" valign="middle">&nbsp;</td>
        </tr>
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
