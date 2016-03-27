<?php
@ob_start();
session_start();

  include("config.php");
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

<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css" >
<script src="js/bootstrap.min.js" ></script>

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
    <td height="10" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="345" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="3%" align="center" valign="middle">&nbsp;</td>

        <td width="97%" align="center" valign="middle"><form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      
          <table width="458" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="50" align="center" valign="middle">&nbsp;</td>
              <td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" style="
    font-size: 18px;
    color: red;
    font-family: -webkit-pictograph;
    font-weight: 600;
"><?php
  
            
     if(isset($_POST['usersave']))
      {
        $name=$_POST['username'];
        $pass=$_POST['password'];

        $select="SELECT * FROM u_login where email='$name' and pass='$pass'";
        $query=mysql_query($select);

        $row=mysql_fetch_array($query);

         if($row['email']===$name && $row['pass']===$pass)
         {
         	if($row['u_type']=='admin')
			{
         $_SESSION['emp_id']=$row['emp_id'];
          header("Location:admin/dashboard.php");
			}
			else
			{
				 $_SESSION['emp_id']=$row['emp_id'];
				 header("Location:user/dashboard.php");
			}
         }
         else
         {
          echo "check your username & password";
        }
      }


?></td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td width="74" height="82" align="center" valign="middle">&nbsp;</td>
              <td colspan="2" align="center" valign="middle" bgcolor="#666666" style="
    font-size: 30px;
    color: #FAFAFA;
    font-family: -webkit-pictograph;
    font-weight: 600;
"><span class="glyphicon glyphicon-user"></span> User Login</td>
              <td width="32" align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="49" align="center" valign="middle">&nbsp;</td>
              <td width="183" align="center" valign="middle" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: cursive;
    font-weight: 500;
">User Name</td>
              <td width="169" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="username" id="username" /></td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="54" align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: cursive;
    font-weight: 500;
">Password</td>
              <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="password" name="password" id="password" /></td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td height="42" align="center" valign="middle">&nbsp;</td>
              <td colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><input type="submit" name="usersave" id="usersave" value="Submit" /></td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle">&nbsp;</td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="middle">&nbsp;</td>
              <td colspan="2" align="center" valign="middle"><br /></td>
              <td align="center" valign="middle">&nbsp;</td>
            </tr>
          </table>
        </form></td>
      </tr>
    </table></td>
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
