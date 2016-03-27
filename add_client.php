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
          <td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" style="
    font-size: 18px;
    font-family: -webkit-pictograph;
    font-weight: 300;
">
<?php
include("../db/connect.php");


    if(isset($_POST['c_save']))
      {
        $client_id=$_POST['c_id'];
        $c_name=$_POST['c_name'];
        $c_p_title=$_POST['c_p_title'];
        $c_file=$_POST['c_file'];
        $c_email=$_POST['c_email'];
        $c_pass=$_POST['c_pass'];
        $c_s_date=$_POST['c_s_date'];
        $c_e_date=$_POST['c_e_date'];
        $c_notes=$_POST['c_notes'];

        $insert="INSERT INTO `addclient` (`c_id`, `client_id`, `c_name`, `c_p_title`, `c_file`, `c_email`, `c_pass`, `c_s_date`, `c_e_date`, `c_notes`) VALUES (NULL, '$client_id' '$c_name', '$c_p_title', '$c_file','$c_email', '$c_pass', '$c_s_date', '$c_e_date', '$c_notes')";

         $result=mysql_query($insert);

        ?>
      <div class="alert alert-success fade in">
                      <a href="save" class="close" data-dismiss="alert">&times;</a>
                      <strong>Success!</strong> Successfully inserted.
              </div>
                  <?php
                
             
            }
              ?>
</td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td width="100" height="57" align="center" valign="middle">&nbsp;</td>
          <td colspan="2" align="center" valign="middle" bgcolor="#999999" style="
    font-size: 30px;
    color: #FAFAFA;
    font-family: -webkit-pictograph;
    font-weight: 600;
">Client Registration</td>
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
">Client id</td>
            </tr>
          </table></td>
          <td width="276" align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_id" id="c_id" /></td>
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
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_name" id="c_name" /></td>
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
">Project Title</td>
            </tr>
          </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_p_title" id="c_p_title" /></td>
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
">Client DOC</td>
              </tr>
            </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="file" name="c_file" id="c_file" /></td>
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
">E-mail</td>
            </tr>
          </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_email" id="c_email" /></td>
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
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_pass" id="c_pass" /></td>
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
">Starting Date</td>
            </tr>
          </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_s_date" id="c_s_date" /></td>
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
">Ending Date</td>
            </tr>
          </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><input type="text" name="c_e_date" id="c_e_date" /></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="47" align="center" valign="middle">&nbsp;</td>
          <td align="left" valign="middle" bgcolor="#CCCCCC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="5%" height="49" bgcolor="#CCCCCC">&nbsp;</td>
              <td width="95%" bgcolor="#CCCCCC" style="
    color: #fff;
    font-size: 20px;
    font-family: times;
    font-weight: 500;
">Notes:</td>
            </tr>
          </table></td>
          <td align="left" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="89" align="center" valign="middle">&nbsp;</td>
          <td colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><textarea name="c_notes" id="c_notes" cols="600" rows="5" style="
    width: 380px;
"></textarea></td>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td height="63" align="center" valign="middle">&nbsp;</td>
          <td colspan="2" align="center" valign="bottom" bgcolor="#CCCCCC"><input type="submit" name="c_save" id="c_save" value="Submit" /></td>
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
