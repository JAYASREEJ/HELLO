<?php
@ob_start();
session_start();
$_SESSION["emp_id"]="";
unset($_SESSION["emp_id"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
header("Location: index.php");
  ?>
