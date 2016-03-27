

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

<script src="js/jquery.js"></script>
<script src="js/jquery.validate.js"></script>

<script>
  

  
  $().ready(function() {
    
    // validate signup form on keyup and submit

    $("#form1").validate({
        
      messages: {
        f_name:"Please enter the First Name",
        l_name:"Please enter the Last name",
        email:"Please enter the E-mail",
        pass:"Please enter the Password",
        m_no:"Please enter your Mobile Number"
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
    <td height="10" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="345" align="center" valign="middle" bgcolor="#FFFFFF"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <br />
     
          
      <table width="660" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="57" align="center" valign="middle">&nbsp;</td>
          <td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" style="
    font-size: 30px;
    color: #FAFAFA;
    font-family: -webkit-pictograph;
    font-weight: 600;
"><?php
include("db/connect.php");


    if(isset($_POST['save']))
      {
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $m_no=$_POST['m_no'];

        $insert="INSERT INTO `u_login` (`id`, `f_name`, `l_name`, `email`, `pass`, `mobile`) VALUES (NULL, '$f_name', '$l_name', '$email','$pass', '$m_no')";

         $result=mysql_query($insert);

        ?>
      <div class="alert alert-success fade in">
                      <a href="save" class="close" data-dismiss="alert">&times;</a>
                      <strong>Success!</strong> Successfully inserted.
              </div>
                  <?php
                
             
            }
              ?></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="50" align="center" valign="middle"></td>
          <td colspan="2" align="right" valign="middle" bgcolor="#fff" style="
    font-size: 20px;
    font-family: -webkit-pictograph;
    font-weight: 300;
"><a href="index.php">Already Register Login Here.</a>.</td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td width="100" height="57" align="center" valign="middle">
              </td>
          <td colspan="2" align="center" valign="middle" bgcolor="#999999" style="
    font-size: 30px;
    color: #FAFAFA;
    font-family: -webkit-pictograph;
    font-weight: 600;
"><span class="glyphicon glyphicon-hand-down"></span>  User Registration</td>
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
" >First Name</td>
            </tr>
          </table></td>
          <td width="276" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="f_name" id="f_name" required/></td>
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
" >Last Name</td>
              </tr>
            </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="l_name" id="l_name" required/></td>
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
" >E-mail </td>
              </tr>
            </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="email" name="email" id="email" required/></td>
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
" >Password</td>
            </tr>
          </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="password" name="pass" id="pass" required/></td>
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
" >Mobile Number</td>
              </tr>
            </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="tel" name="m_no" id="m_no" required/></td>
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
