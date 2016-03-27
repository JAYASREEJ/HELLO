<?php
@ob_start();
session_start();
if(empty($_SESSION['emp_id'])){
         header("Location:../index.php");
}

include("../config.php");

 $action = 'add_users.php';

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
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>
<script src="../js/lib/jquery.js"></script>
<script src="../js/dist/jquery.validate.js"></script>
<script>
  

  
  $().ready(function() {
    
    // validate signup form on keyup and submit

    $("#form1").validate({
        
      messages: {
      p_id:"Enter The  Project Id",
        e_name:"Please enter Name",
    email:"Please enter Email Id",
    p_pass:"Please password",
    c_no:"Please enter cell No"
     
        },
      


    });

    $("#reset").click(function() {
    $("label.error").hide();
    $(".error").removeClass("error");
    });

    
  });
  </script>
  <style>
  .error
  {

color:red;  }</style>
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
   <form class="form-horizontal" action="<?php echo $action;?>" enctype="multipart/form-data" method="post" id="form1" novalidate="novalidate">
      <br />
      <br />
      <br />
      <br />
      <br />
      <table width="660" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="100" height="57" align="center" valign="middle">&nbsp;</td>
          <td colspan="2" align="center" valign="middle" bgcolor="#999999" style="
    font-size: 30px;
    color: #FAFAFA;
    font-family: -webkit-pictograph;
    font-weight: 600;
">Employee Registration</td>
          <td width="100" align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="55" align="center" valign="middle">&nbsp;</td>
          <td width="184" align="center" valign="middle" bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="21%" height="51" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="79%" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: times;
    font-weight: 500;
">Emp id</td>
            </tr>
          </table></td>
          <td width="276" align="left" valign="middle" bgcolor="#CCCCCC">
 
          <input type="text" name="p_id" id="p_id"  required/></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="50" align="center" valign="middle">&nbsp;</td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="21%" height="51" bgcolor="#CCCCCC">&nbsp;</td>
                <td width="79%" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: times;
    font-weight: 500;
">Name</td>
              </tr>
            </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="e_name" id="e_name"  required/></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="51" align="center" valign="middle">&nbsp;</td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="21%" height="51" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="79%" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: times;
    font-weight: 500;
">E-mail</td>
              </tr>
            </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC">
          <input type="text" name="email" id="email"  required/></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="47" align="center" valign="middle">&nbsp;</td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="21%" height="51" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="79%" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: times;
    font-weight: 500;
">Password</td>
            </tr>
          </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="password" name="p_pass" id="p_pass" required /></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="47" align="center" valign="middle">&nbsp;</td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="21%" height="51" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="79%" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: times;
    font-weight: 500;
">Mobile Number</td>
              </tr>
            </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_no" id="c_no"   required/></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="63" align="center" valign="middle">&nbsp;</td>
          <td colspan="2" align="center" valign="bottom" bgcolor="#CCCCCC"><input type="submit" name="save" id="save" value="Submit" /></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
          <td align="left" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
          <td align="center" valign="middle">&nbsp;</td>
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
