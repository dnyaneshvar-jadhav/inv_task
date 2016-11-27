<?php
//echo "hello";
session_start();
if(isset($_SESSION['user_id'])|| isset($_SESSION['user_name']))
{
    //echo "session started"; exit;
    unset( $_SESSION['user_id']);
        unset( $_SESSION['user_name']);
        header("Location:login.php");
}
 else
{
  echo "not started"; exit;   
}


?>
