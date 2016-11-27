<?php

$log_email = $_REQUEST['uname'];
$pa = $_REQUEST['password1'];
$con = mysql_connect("localhost", "root", "") or die(mysql_error());
$sel = mysql_select_db("college") or die(mysql_error());
$v = "select * from registration where Email='" . $log_email . "'and Password='" . $pa . "'";
$result = mysql_query($v);

if ($result) {
    //echo "success";
    while ($res = mysql_fetch_array($result)) {
        $userId = $res['user_id'];
        $emailId = $res['Email'];
        $name = $res['Firstname'];
    }
    session_start();
    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $name;

    if (isset($_SESSION['user_id'])) {
        header("Location:user_dashboard.php");
    } else {
        header("location:login.php");
    }
   } 
else {
   header("location:login.php");
}
?>
